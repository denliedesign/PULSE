<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = \App\Models\Teacher::all();
        return view('/', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('update', Teacher::class);
        $teacher = new Teacher();
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $teacher = Teacher::create($this->validateRequest());
        $this->storeImage($teacher);
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('/', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $this->authorize('update', Teacher::class);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($this->validateRequest());
        $this->storeImage($teacher);
        return Redirect::to("/staff")->with('message', 'Your Page Has Been Updated!');
//        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return Redirect::to(url()->previous("/"));
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'title' => 'required',
            'bio' => 'required',
            'headshot' => 'required|file|image|max:5000',
        ]);
    }

    private function storeImage($teacher)
    {
        if (request()->has('headshot'))
        {
            $teacher->update([
                'headshot' => request()->headshot->store('uploads', 'public'),
            ]);
        }
    }
}
