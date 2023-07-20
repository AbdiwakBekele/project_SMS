@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container">
<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
    <h1>Hello, Admin!</h1>
          <div class="row ms-5">
            <div class="col-4">
            @role('admin')
            <a class="link-opacity-10" href="{{route('admin.RPmanagement')}}"> <button type="button" class="btn btn-primary">R$Pmana</button></a>
            <a class="link-opacity-10" href="{{route('admin.Staff.ManageUsers')}}"> <button type="button" class="btn btn-primary">StaffManagment</button></a>
            @endrole
          
            <a class="link-opacity-10" href="{{route('admin.Parents.ManageParents')}}"> <button type="button" class="btn btn-primary">ParentsManagment</button></a>
           </div>
           <div class="col-4">
            <a class="link-opacity-10" href="{{route('admin.Students.ManageStudents')}}"> <button type="button" class="btn btn-primary">StudentsManagment</button></a>
              <button type="button" class="btn btn-warning">Warning</button>
              <button type="button" class="btn btn-info">Info</button>
           </div>
           <div class="col-4">
            
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
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