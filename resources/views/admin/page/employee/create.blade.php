<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Employee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="name" required>
          </div>
          <div class="form-group">
              <label for="name">Postion</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="role" required>
          </div>
          <div class="form-group">
              <label for="name">Phone</label>
              <input type="number" class="form-control" id="name" aria-describedby="name" name="phone" required>
          </div>
          <div class="form-group">
              <label for="name">Email</label>
              <input type="email" class="form-control" id="name" aria-describedby="name" name="email" required>
          </div>
          <div class="form-group">
            <label for="name">Avatar</label>
            <input type="file" name="avatar" id="avatar" class="form-control" accept="image/*" required>
            <img id="blash" src="#" width="400" height="200" class="mb-3 mt-5" alt="your image" />
        </div>
          <button type="submit" class="btn btn-primary">Add</button>
          </div>
       </form>
        </div>
        
    </div>
  </div>
  @push('addon-script')
  <script>
  
  avatar.onchange = evt => {
    const [file] = avatar.files
    if (file) {
      blash.src = URL.createObjectURL(file)
    }
  }
 
  </script>
  @endpush