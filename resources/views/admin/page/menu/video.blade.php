@extends('admin.layout.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mb-5">Social Media</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Youtube Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @include('admin.include.flashmessage')
        <form action="{{ route('menus.video.update') }}" method="POST" enctype='multipart/form-data'>
            @method('put')
            @csrf
            <div class="form-group">
                <label for="name">Youtube Link</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $yt->value }}" name="yt" required>
            </div>
            <small id="emailHelp" class="form-text text-muted">https://www.youtube.com/watch?v=<small style="color: red">n8SfoIPDkZc</small></small>
            <small class="form-text text-muted mb-3">Copy link id youtube seperti dicontoh</small>
            <button type="submit" class="btn btn-primary mb-5">Update</button>
            </div>
        </form>
      </div>
    </section>
@endsection

@push('addon-script')

@endpush