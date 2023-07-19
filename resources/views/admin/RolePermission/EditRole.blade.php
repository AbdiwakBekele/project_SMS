<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
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
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>