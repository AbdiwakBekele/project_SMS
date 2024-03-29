@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container">
    <div class="card">
        <div class="card-header">
        <div class="row">
<div class="col-2">
    <a href="{{route('admin.RPmanagement')}}"  class="btn btn-primary" data-bs-placement="top" data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left"></i></a>
</div>
    <div class="title h1 col-10">Add new Permission</div>
</div>
        </div>
        <form action="{{url('admin/permission')}}"  method="post" class="needs-validation" novalidate>
           @csrf
        <div class="form-group row">
                <label for="inputPassword" class="offset-1 col-sm-2 col-form-label">Permission Name</label>
                <div class="col-sm-5 mt-1">
                    <input name="name" type="text" class="form-control" id="inputPassword" placeholder="name" required>
                </div>
                <div class="invalid-feedback">
                    Permission must be added
                </div>
                <div class="col-sm-2 mt-1">
                 <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true">ADD</i></button>
                </div>
            </div>
        </form>


    </div>
    <div class="container mt-5 ">
        <div class="card ">
            <div class="card-header dark">
                Permissions List
            </div>
            <div class="form-group text-center ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Permissions</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                    @php
          $percount=1;
          @endphp
                    @foreach($permissions as $permission)
                        <tr>
                      
                            <th scope="row">{{$percount++}}</th>
                            <td>{{$permission->name}}</td>
                            <td>
                                <ul class="list-inline m-0">
                                    <!-- <li class="list-inline-item">
                                       <a href=""> <button class="btn btn-success btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-placement="top" title="Edit" data-bs-target="#exampleModalLong"><i class="fa fa-edit"></i></button></a>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="">  <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                                    </li> -->

                                    <li class="list-inline-item">
                                       <a href="{{ route('admin.editpermission', ['id' => $permission->id])}}"> <button class="btn btn-success btn-sm rounded-0" type="button"  data-bs-placement="top" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></button></a>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="{{url('admin/Permissions/'.$permission->id.'/delete')}}">  <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                                    </li>
                                </ul>
                            </td>
                    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Permission</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                 
                    <form action="" class="needs-validation" novalidate>
                    
                    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingPassword" value="Add Student" required autofocus>
  <label for="floatingPassword">Permission</label>
</div>
<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>    
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