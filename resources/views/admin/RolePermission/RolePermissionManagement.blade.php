<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <div class="row ms-4">
    <a class="link-opacity-10" href="{{route('admin.createRole')}}"> <button type="button" class="btn btn-primary">create Role</button></a>
    <a class="link-opacity-10" href="{{route('admin.createPermission')}}"> <button type="button" class="btn btn-primary">create permissions</button></a>
      <div class='col-4 border border-2 mt-5'>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Roles</th>
      
             </tr>
          </thead>
          <tbody>
            @foreach($roles as $role)
            <tr>
              <th scope="row">{{$role->id}}</th>
              <td>{{$role->name}}</td>
              <td>
              <a href="editRole/{{$role->id}}"> Edit</a>
              </td>
              <td>
              <a href="{{url('admin/Roles/'.$role->id.'/delete')}}"> Delete</a>
              </td>
              
             
            </tr>
            @endforeach
            

          </tbody>
        </table>
      </div>
      <!-- <div class>
      </div> -->
      <div class='col-4 ms-5 border border-2 mt-5'>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Permissions</th>
      
             </tr>
          </thead>
          <tbody>
          @foreach($permissions as $permission)
            <tr>
              <th scope="row">{{$permission->id}}</th>
              <td>{{$permission->name}}</td>
              <td>
                <a href="editPermission/{{$permission->id}}"> Edit</a>
            </td>
            <td>
              <a href="{{url('admin/Permissions/'.$permission->id.'/delete')}}"> Delete</a>
              </td>
            
           
      
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>