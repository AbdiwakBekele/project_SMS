@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="title h1">Subject Management</div>
  </div>

  <div class="row ms-4 mt-5">


    


    <!-- permission -->

    <div class="col-md-5">
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <div class="btn btn-secondary disabled">Subject List</div>
          
        </div>
        <div class="col-12">

          <table class="table">
          
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Subject Name</th>
              <th scope="col">Subject Code</th>
             </tr>
          </thead>
          <tbody>
            @foreach($subjects as $subject)
            <tr>
              <th scope="row">{{$subject->id}}</th>
              <td>{{$subject->subject_name}}</td>
              <td>{{$subject->subject_code}}</td>

              

            
            </tr>
            @endforeach
            

          </tbody>
          </table>
        </div>
      </div>

    </div>
    <div class="offset-1 col-md-5">
      <div class="row d-flex justify-content-between">
        <div class="col-12  mb-3 w-100">
        <a  href="{{route('admin.subjects.create')}}"> <button type="button" class="btn btn-primary">Add Subjects</button></a>
        </div>
        <div class="col-12  mb-3 w-100">
        <a class="" href="{{route('admin.subjects.AssignForClass')}}"> <button type="button" class="btn btn-primary">Assign Subject to Class</button></a>
        </div>
        <div class="col-12  mb-3 w-100">
        <a  href="{{route('admin.subjects.AssignForTeacher')}}"> <button type="button" class="btn btn-primary">Assign Subject to Teachers</button></a>
        </div>

      </div></div>
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