@can('update', \App\Teacher::class)

    <div class="d-flex justify-content-center mt-2">
        <div class="mx-2">
            <a href="/teachers/{{ $teacher->id }}/edit">
                <button class="btn btn-secondary ml-4">Edit</button>
            </a>
        </div>
        <div class="mx-2">
            <form action="/teachers/{{ $teacher->id }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger ml-4" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>

@endcan
