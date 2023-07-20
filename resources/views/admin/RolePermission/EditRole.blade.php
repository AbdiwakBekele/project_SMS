@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<a class="link-opacity-10" href="{{route('admin.RPmanagement')}}"> <button type="button" class="btn btn-primary">back</button></a>

    <h1 class="m-3">editing Roles</h1>
    <div class="container m-5">
    <form action="{{url('admin/updateRole')}}" method="post">
           @csrf
           @method('PUT')
            <div class="form-group">
            <input type="hidden" name="role" value="{{ $role->id }}">
            <label for="exampleInputPassword1">Role</label>
            <input type="text" name="name"  class="form-control" id="exampleInputPassword1"  value="{{ $role->name }}">
            </div>
            
            <button type="submit" class="btn btn-primary mt-4">Save</button>
        </form>
        
        <div class='container mt-5'>
            <h2>
                Role Permission
            </h2>
            @if($role->permissions)
                @foreach($role->permissions as $role_permission)
                    <form method='POST' 
                    action="{{route('admin.roles.permissions.revoke',[$role->id,$role_permission->id])}}" onsubmit="return confirm('Are you sure to delete this permission')">
                      @csrf
                      @method('DELETE')
                      <div class="row">
                        <button type="submit" class='col-2 ms-3 mt-3'>
                             {{$role_permission->name}}
                        </button>
                        <!-- <div class="col-6">{{$role_permission->name}}</i></div> -->
                        <!-- <div class="col-6 justify-flex-end"><a class="link-opacity-10 btn" type="submit"><i class="bi bi-x" style="font-size: 2rem; color: black;"></i></a></div> -->
                    </div>
                    </form>
                    
                @endforeach
            @endif

            <!-- permission -->
            <form action="{{route('admin.roles.permissions',$role->id)}}" method="post">
              @csrf
        
            <div class="form-group">
            <input type="hidden" name="role" value="{{ $role->id }}">
            <label for="exampleFormControlSelect1">Permissions</label>
            <select class="form-control" id="exampleFormControlSelect1" name="permission">
           
               @foreach($permissions as $permission)
                <option value="{{$permission->name}}">{{$permission->name}}</option>                
               @endforeach
               
            </select>          
          </div>
            
            <button type="submit"  class="btn btn-primary mt-4">Assign Permission</button>
        </form>

        </div>

    </div>
        
    @endsection
    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    @endsection