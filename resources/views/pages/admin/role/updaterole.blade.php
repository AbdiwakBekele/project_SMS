
@extends('partials.home')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')

<div class="d-flex justify-content-start p-3 h1">
    Update Role
</div> 
<div class="row w-50 m-4">
<form action="" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="id1">Role Name</label>
                <input class="form-control" type="text" 
                    id="id1" placeholder="Enter your User Name" value="Admin" required>
            </div>
            <div class="form-group">
                <label for="id2">Permissions</label>
                
                <select class="form-control selectpicker" id="multiselect" multiple data-live-search="true" title="permissions">
  
  <option class="br-primary" value="2">BA Degree</option>

  <option class="br-primary" selected value="2">BS Degree</option>
  <option class="br-primary" selected value="3">MS Degree</option>
  <option class="br-primary" selected value="4">MA degree</option>
  <option value="5">other</option>
</select>
            </div>
            <div class="container">
             
                <button type="submit" class="btn btn-secondary">
                Save Changes
                </button>
            </div>
        </form>
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