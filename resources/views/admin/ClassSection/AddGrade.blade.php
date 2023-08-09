
@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


@endsection
@section('section')
<div class="container">
<div class="row">
<div class="col-2">
    <a href="{{route('admin.ClassSection.ClassSectionManagement')}}"  class="btn btn-primary" data-bs-placement="top" data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left"></i></a>
</div>
    <div class="title h1 col-10">Add New Grade</div>
</div>
<div class="container m-5">
  
<form action="{{route('admin.AddGrades')}}" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="form-group" style="width: 22rem;">
            <label for="typeNumber">Grade</label>
    <input min="1" max="12" name="grade_name" type="number" id="typeNumber" class="form-control" placeholder="Grade" />
   
</div>
          
  
            <button type="submit" class="btn btn-primary mt-4">Add</button>
        </form>
</div>
</div>

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
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

 

                   
      form.classList.add('was-validated');
    
                }, false)
            })
        })()
    </script>
@endsection