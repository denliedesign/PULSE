<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('staff', function () {
    return view('staff');
});
Route::get('about', function () {
    return view('about');
});
Route::get('classes', function () {
    return view('classes');
});
Route::get('competition', function () {
    return view('competition');
});
Route::get('nova', function () {
    return view('nova');
});
Route::get('calendar', function () {
    return view('calendar');
});
Route::get('age2-4', function () {
    return view('age2-4');
});
Route::get('age5-6', function () {
    return view('age5-6');
});
Route::get('age7-8', function () {
    return view('age7-8');
});
Route::get('age9-10', function () {
    return view('age9-10');
});
Route::get('age11-12', function () {
    return view('age11-12');
});
Route::get('age13-18', function () {
    return view('age13-18');
});
Route::get('acro', function () {
    return view('acro');
});
Route::get('boys', function () {
    return view('boys');
});
Route::get('northern-westchester-dance-studios', function () {
    return view('northern-westchester-dance-studios');
});
Route::get('mt-kisco-dance-studios', function () {
    return view('mt-kisco-dance-studios');
});
Route::get('mount-kisco-dance-studios', function () {
    return view('mount-kisco-dance-studios');
});
Route::get('bedford-dance-classes-toddler', function () {
    return view('bedford-dance-classes-toddler');
});
Route::get('dance-classes-bedford', function () {
    return view('dance-classes-bedford');
});
Route::get('dance-studios-mount-kisco', function () {
    return view('dance-studios-mount-kisco');
});

Route::resource('contents', ContentController::class);
Route::resource('photos', PhotoController::class);
Route::resource('teachers', TeacherController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
