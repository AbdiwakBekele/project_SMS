@extends('partials.home')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container">
    <div class="card">
        <div class="card-header">
            Add new Permission
        </div>
        <form action="" class="needs-validation" novalidate>
            <div class="form-group row">
                <label for="inputPassword" class="offset-1 col-sm-2 col-form-label">Permission Name</label>
                <div class="col-sm-5 mt-1">
                    <input type="text" class="form-control" id="inputPassword" placeholder="name" required>
                </div>
                <div class="invalid-feedback">
                    Permission must be added
                </div>
                <div class="col-sm-2 mt-1">
                   <a href="{{url('updatepermission')}}"> <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Add Student</td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <button class="btn btn-success btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-placement="top" title="Edit" data-bs-target="#exampleModalLong"><i class="fa fa-edit"></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </li>

                                </ul>
                            </td>

                        </tr>
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