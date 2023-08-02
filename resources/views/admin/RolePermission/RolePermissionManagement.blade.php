@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="title h1">Roles and Permissions</div>
  </div>

  <div class="row ms-4 mt-5">


    <div class="col-md-5">
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <div class="btn btn-success disabled">Roles</div>
          <div><a class="link-opacity-10" href="{{route('admin.createRole')}}"> <button type="button" class="btn btn-primary">Create New Role</button></a></div>
        </div>
        <div class="col-12">

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
                  <a href="{{route('admin.editrole', ['id' => $role->id])}}"> Edit</a>
                </td>
                <td>
                  <a href="{{url('admin/Roles/'.$role->id.'/delete')}}"> Delete</a>
                </td>


              </tr>
              @endforeach


            </tbody>
          </table>
        </div>
      </div>

    </div>


    <!-- permission -->

    <div class=" offset-1 col-md-5">
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <div class="btn btn-secondary disabled">Permissions</div>
          <div><a class="link-opacity-10" href="{{route('admin.createPermission')}}"> <button type="button" class="btn btn-primary">create permissions</button></a>
           </div>
        </div>
        <div class="col-12">

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
              <a href="{{ route('admin.editpermission', ['id' => $permission->id])}}"> Edit</a>
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

    </div>
    <!-- <div class>
      </div> -->
    
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