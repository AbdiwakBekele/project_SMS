@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container">
<div class="row">
<div class="col-2">
    <a href="{{route('admin.RPmanagement')}}"  class="btn btn-primary" data-bs-placement="top" data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left"></i></a>
</div>
    <div class="title h1 col-10">Editing Roles</div>
</div>

  
    <div class="row">
        <div class="col-md-5">
    <form action="{{url('admin/updateRole')}}" method="post">
           @csrf
           @method('PUT')
            <div class="form-group">
            <input type="hidden" name="role" value="{{ $role->id }}">
            <label for="exampleInputPassword1"><h4> Role</h4></label>
            <input type="text" name="name"  class="form-control" id="exampleInputPassword1"  value="{{ $role->name }}">
            </div>
            
            <button type="submit" class="btn btn-primary mt-1">Update Name</button>
        </form>
        </div>
        <div class='offset-1 col-md-5 row'>
            <div class="div col-12">
            <h4>
                Role's Permission
            </h4>
            </div>
            <div class="col-12">
            @if($role->permissions)
                @foreach($role->permissions as $role_permission)
                    <form method='POST' 
                    action="{{route('admin.roles.permissions.revoke',[$role->id,$role_permission->id])}}" onsubmit="return confirm('Are you sure to delete this permission')">
                      @csrf
                      @method('DELETE')
                      <div class="row mb-2">
                        <div class="col-md-7 btn btn-success disabled">  {{$role_permission->name}}</div>
                        <button type="submit" class='mb-1  col-md-1 text-danger border-0'>
                           <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        <!-- <div class="col-6">{{$role_permission->name}}</i></div> -->
                        <!-- <div class="col-6 justify-flex-end"><a class="link-opacity-10 btn" type="submit"><i class="bi bi-x" style="font-size: 2rem; color: black;"></i></a></div> -->
                    </div>
                    </form>
                    
                @endforeach
            @endif
            </div>

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
            
            <button type="submit"  class="btn btn-primary mt-1">Assign Permission</button>
        </form>

        </div>

    </div>
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