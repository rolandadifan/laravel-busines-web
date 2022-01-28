@extends('admin.layout.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mb-5">Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Project</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
      <a href="{{route('project.create')}}" class="btn btn-primary btn-sm px-5 py-1 mb-3">Create</a>
      @include('admin.include.flashmessage')

      <table id="table-category" class="table-responsive-md display" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Create On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($project as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('j F, Y') }}</td>
                            <td>
                                <a href="{{ route('project.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <form action="{{ route('project.destroy', $data->id) }}" class="d-inline" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-fw fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
      </div>
    </section>
@endsection

@push('addon-script')
<script>
// data table
$('#table-category').DataTable({
    responsive: true
});

</script>
@endpush