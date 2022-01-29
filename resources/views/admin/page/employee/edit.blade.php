@extends('admin.layout.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mb-5">{{ $data->name }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Profile Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <a href="{{ route('employee.index') }}" class="btn btn-secondary btn-sm mb-5"><i class="fas fa-arrow-left"></i> Back</a><br>
        @include('admin.include.flashmessage')
        <div class="text-center">
            <p>
                <img src="{{ Storage::url($data->avatar) }}" width="200" height="200" style="border-radius: 50%"  alt="">
            </p>
        </div>
        <form action="{{ route('employee.update', $data->id) }}" method="POST" enctype='multipart/form-data'>
            @method('put')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $data->name }}" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Postion</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $data->role }}" name="role" required>
            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                <input type="number" class="form-control" id="name" aria-describedby="name" value="{{ $data->phone }}" name="phone" required>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" id="name" aria-describedby="name" value="{{ $data->email }}" name="email" required>
            </div>
            <div class="form-group">
              <label for="name">Avatar</label>
              <input type="file" name="avatar" id="avatars" class="form-control" accept="image/*">
              <img id="blashs" src="#" width="400" height="200" class="mb-3 mt-5" alt="your image" />
          </div>
            <button type="submit" class="btn btn-primary mb-5">Update</button>
            </div>
        </form>
      </div>
    </section>
@endsection

@push('addon-script')
<script>

avatars.onchange = evt => {
  const [file] = avatars.files
  if (file) {
    blashs.src = URL.createObjectURL(file)
  }
}
// ckeditor
var textarea = document.getElementById('news-create')
CKEDITOR.replace(textarea);
</script>
@endpush