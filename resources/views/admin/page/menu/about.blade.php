@extends('admin.layout.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mb-5">Menu About</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">About</li>
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
        <form action="{{ route('about.update') }}" method="POST" enctype='multipart/form-data'>
            @method('put')
            @csrf
            <div class="form-group">
                <label for="name">About</label>
                <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="3">{{ $about->value }}</textarea>
            </div>
            <div class="form-group">
                <label for="name">Visi</label>
                <textarea class="form-control" name="visi" id="exampleFormControlTextarea1" rows="3">{{ $visi->value }}</textarea>
            </div>
            <div class="form-group">
                <label for="name">Misi</label>
                <textarea class="form-control" name="misi" id="exampleFormControlTextarea1" rows="3">{{ $misi->value }}</textarea>
            </div>
            <div class="form-group">
                <label for="name">Know Us</label>
                <textarea class="form-control" name="knowus" id="exampleFormControlTextarea1" rows="3">{{ $knowus->value }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Update</button>
            </div>
        </form>
      </div>
    </section>
@endsection

@push('addon-script')

@endpush