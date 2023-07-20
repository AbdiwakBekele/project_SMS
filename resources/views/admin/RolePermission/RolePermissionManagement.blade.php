@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
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
            @php
            $rolcount=1;
            @endphp
            @foreach($roles as $role)
            <tr>
              <!-- <th scope="row">role->id</th>
             -->
             <th scope="row">{{ $rolcount++}}</th>

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
          @php
            $percount=1;
            @endphp
          @foreach($permissions as $permission)
            <tr>
              <!-- <th scope="row">$permission->id</th> -->
             <th scope="row">{{ $percount++}}</th>

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