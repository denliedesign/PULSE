<!-- FORM -->
<form action="/teachers" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name"
               value="{{ old('name', $teacher->name) }}">
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" type="text" class="form-control" name="title"
               value="{{ old('title', $teacher->title) }}">
        <div>{{ $errors->first('title') }}</div>
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea name="bio" cols="30" rows="10" class="form-control"
                  id="content-textarea">{{ old('bio', $teacher->bio) }}</textarea>
        <div>{{ $errors->first('bio') }}</div>
    </div>
    <div class="form-group">
        <label for="headshot">Headshot</label>
        <input type="file" class="form-control-file" name="headshot">
        <div>{{ $errors->first('headshot') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<!-- END FORM -->
