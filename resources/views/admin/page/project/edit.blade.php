@extends('admin.layout.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mb-5">{{$project->title}}</h1>
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
        <form action="{{ route('project.update', $project->id) }}" method="POST" enctype='multipart/form-data'>
            @method('put')
            @csrf
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{$project->title}}"  name="title" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" name="category_id" id="exampleFormControlSelect1" required>
                    <option value="{{ $project->category->id }}">{{ $project->category->name }}</option>
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
                <input type="file" name="thumbnail" id="thumbnails" class="form-control" accept="image/*">
                <small id="emailHelp" class="form-text text-muted">thumbnail is opsional</small>
                <img id="Thumbanailss" src="#" width="400" height="200" class="mb-3 mt-5" alt="your Thumbanail" />
            </div>
            <video
                id="my-video"
                class="video-js mb-3"
                controls
                preload="auto"
                width="640"
                height="264"
                poster="{{ Storage::url($project->thumbnail) }}"
                data-setup="{}"
              >
                <source src="{{ Storage::url($project->video_link) }}" type="video/mp4" />
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a
                  web browser that
                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>
            <div class="form-group">
                <label for="name">Description</label>
                <textarea name="description"  id="project-edits" class="form-control"  cols="30" rows="10" required>{{$project->description ?? ''}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Update</button>
            </div>
        </form>

        <form action="{{route('gallery.store')}}" method="post" enctype='multipart/form-data' class="mt-5 mb-2">
            @csrf
            <h3>Image Project</h3>
            <input type="hidden" value="{{$project->id}}" name="project_id">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <input type="file" name="image[]" id="gallery-photo-adds" class="form-control" accept="image/*" multiple required>
                  <small id="emailHelp" class="form-text text-muted">can input maks 6 image</small>
                  <div class="gallerys"></div>
                </div>
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-primary" style="margin-top: 30px">Add</button>
              </div>
            </div>
        </form>
        <div class="mt-3 mb-3">
          <div class="row">
            @forelse($project->gallery as $gallerys)
            <div class="col-md-4">
                <img src="{{ Storage::url($gallerys->image) ?? '' }}" width="300" height="200" alt="">
                <form action="{{ route('gallery.destroy', $gallerys->id) }}" method="post">
                  @method('delete')
                  @csrf
                  <div class="delete-image">
                    <button type="submit" class="button-delete-gallery">x</button>
                  </div>
                </form>
            </div>
            @empty
            <div><h5>no image here</h5></div>
            @endforelse
          </div>
        </div>

      </div>
    </section>
@endsection

@push('addon-script')
<script>
  $(function() {
    // Multiple images preview in browser
    var imagesPreviews = function(input, placeToInsertImagePreview) {

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

    $('#gallery-photo-adds').on('change', function() {
        imagesPreviews(this, 'div.gallerys');
    });
});
      thumbnails.onchange = evt => {
        const [file] = thumbnails.files
        if (file) {
          Thumbanailss.src = URL.createObjectURL(file)
        }
      }
      var textarea = document.getElementById('project-edits')
      CKEDITOR.replace(textarea);
</script>
@endpush