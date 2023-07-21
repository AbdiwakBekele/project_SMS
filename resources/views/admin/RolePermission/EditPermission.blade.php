@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container-fluid">
<div class="row m-5 d-flex justify-content-center">
  
<div class="col-2">
    <a href="{{route('admin.RPmanagement')}}"  class="btn btn-primary" data-bs-placement="top" data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left"></i></a>
</div>
    <div class="title h1 col-10">Edit Permission</div>
</div>
</div>

    <div class="container m-5">
    <form action="{{url('admin/updatePermission')}}" method="post">
           @csrf
           @method('PUT')
            <div class="form-group">
            <input type="hidden" name="permission" value="{{ $permission->id }}">
            <label for="exampleInputPassword1">Permission</label>
            <input type="text" name="name"  class="form-control" id="exampleInputPassword1"  value="{{ $permission->name }}">
            </div>
            
            <button type="submit" class="btn btn-primary mt-2">Save Changes</button>
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