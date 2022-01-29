@extends('admin.layout.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mb-5">Contact Info</h1>
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
        @include('admin.include.flashmessage')
        <form action="{{ route('contact.update') }}" method="POST" enctype='multipart/form-data'>
            @method('put')
            @csrf
            <div class="form-group">
                <label for="name">Location</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $location->value }}"  name="location" required>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $email->value }}"   name="email" required>
            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $phone->value }}"   name="phone" required>
            </div>
            <div class="form-group">
                <label for="name">Fax</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ $fax->value }}"  name="fax" required>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Update</button>
            </div>
        </form>
      </div>
    </section>
@endsection

@push('addon-script')

@endpush