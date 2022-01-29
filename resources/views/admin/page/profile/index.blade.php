@extends('admin.layout.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mb-5">Admin Profile</h1>
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
        <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm mb-2"><i class="fas fa-arrow-left"></i> Back</a>
        @include('admin.include.flashmessage')
        <form action="{{ route('admin.update') }}" method="POST" enctype='multipart/form-data'>
            @method('put')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name"  name="name" value="{{ auth()->user()->name }}" required>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="name" aria-describedby="name"  name="email" value="{{ auth()->user()->email }}" required>
            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                <input type="text" class="form-control" id="name" aria-describedby="name"  name="phone" value="{{ auth()->user()->phone }}" required>
            </div>
            <div class="form-group">
                <label for="name">Addres</label>
                <input type="text" class="form-control" id="name" aria-describedby="name"  name="address" value="{{ auth()->user()->address }}" required>
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
            </div>
            
            <button type="submit" class="btn btn-primary mb-5">Update</button>
            </div>
        </form>
      </div>
    </section>
@endsection

@push('addon-script')

@endpush