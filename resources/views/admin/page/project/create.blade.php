@extends('admin.layout.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mb-5">Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">News</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <a href="{{ route('project.index') }}" class="btn btn-secondary btn-sm mb-5"><i class="fas fa-arrow-left"></i> Back</a>
        @include('admin.include.flashmessage')
        <form action="{{ route('project.store') }}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" aria-describedby="name"  name="title" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" name="category_id" id="exampleFormControlSelect1" required>
                    @foreach($category as $ctg)
                        <option value="{{ $ctg->id }}">{{ $ctg->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Video</label>
                <input type="file" name="video_link" id="imgInp" class="form-control" accept="video/*">
                <small id="emailHelp" class="form-text text-muted">video is opsional</small>
            </div>
            <div class="form-group">
                <label for="name">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" accept="image/*">
                <small id="emailHelp" class="form-text text-muted">thumbnail is opsional</small>
                <img id="Thumbanails" src="#" width="400" height="200" class="mb-3 mt-5" alt="your Thumbanail" />
            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <textarea name="description" id="project-create" class="form-control" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Image</label>
                <input type="file" name="image[]" id="gallery-photo-add" class="form-control" accept="image/*" multiple required>
                <small id="emailHelp" class="form-text text-muted">can input maks 6 image</small>
                <div class="gallery"></div>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Create</button>
            </div>
        </form>
      </div>
    </section>
@endsection

@push('addon-script')
<script>
  thumbnail.onchange = evt => {
  const [file] = thumbnail.files
  if (file) {
    Thumbanails.src = URL.createObjectURL(file)
  }
}
  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img width="400" height="200">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
  var textarea = document.getElementById('project-create')
  CKEDITOR.replace(textarea);
</script>
@endpush