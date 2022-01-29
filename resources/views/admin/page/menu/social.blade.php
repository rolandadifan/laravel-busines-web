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
              <li class="breadcrumb-item active">Social Media</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <a href="{{ route('news.index') }}" class="btn btn-secondary btn-sm mb-5"><i class="fas fa-arrow-left"></i> Back</a>
        @include('admin.include.flashmessage')
        <form action="{{ route('contact.social.update') }}" method="POST" enctype='multipart/form-data'>
            @method('put')
            @csrf
            <div class="form-group">
                <label for="name">Facebook</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $fb->value }}" name="fb" required>
            </div>
            <div class="form-group">
                <label for="name">YouteTube</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $yt->value }}"  name="yt" required>
            </div>
            <div class="form-group">
                <label for="name">WhatsApp</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $wa->value }}"  name="wa" required>
            </div>
            <div class="form-group">
                <label for="name">Instagram</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $ig->value }}"  name="ig" required>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Update</button>
            </div>
        </form>
      </div>
    </section>
@endsection

@push('addon-script')

@endpush