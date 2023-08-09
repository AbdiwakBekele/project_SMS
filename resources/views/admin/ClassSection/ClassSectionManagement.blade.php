@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="title h1">Class and Section</div>
  </div>

  <div class="row ms-4 mt-5">


    


    <!-- permission -->

    <div class="col-md-5">
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <div class="btn btn-secondary disabled">Grades</div>
          <div><a class="link-opacity-10" href="{{route('admin.AddingGrades')}}"> <button type="button" class="btn btn-primary">Add Grade</button></a>
          </div>
        </div>
        <div class="col-12">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Grade</th>
                <th scope="col">Delete</th>

              </tr>
            </thead>
            <tbody>
              @php
              $percount=1;
              @endphp
              @foreach($grades as $grade)
              <tr>
                <!-- <th scope="row">$permission->id</th> -->
                <th scope="row">{{ $percount++}}</th>

                <td>{{$grade->grade_name}}</td>
                <td>
                  <a href="{{url('admin/grades/'.$grade->id.'/delete')}}"> Delete</a>
                </td>



              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>

    </div>
    <div class="offset-1 col-md-5">
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <div class="btn btn-success disabled">Section</div>
          <div><a class="link-opacity-10" href="{{route('admin.AddingSections')}}"> <button type="button" class="btn btn-primary">Add Section</button></a></div>
        </div>
        <div class="col-12">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Grade</th>
                <th scope="col">Section</th>
                <th scope="col">home-Teacher</th>
                <th scope="col">Delete</th>

              </tr>
            </thead>
            <tbody>
              @php
              $rolcount=1;
              @endphp
              @foreach($sections as $section)
              <tr>
                <!-- <th scope="row">role->id</th>
             -->
                <th scope="row">{{ $rolcount++}}</th>

                <td>{{$section->grade->grade_name}}</td>
                <td>{{$section->section_name}}</td>
                <td>{{$section->userSection->full_name}}</td>
                <td>
                  <a href="{{url('admin/sections/'.$section->id.'/delete')}}"> Delete</a>
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