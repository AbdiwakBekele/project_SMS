
@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


@endsection
@section('section')
<div class="container">
<div class="row">
<div class="col-2">
    <a href="{{route('admin.Subjects.ManageSubjects')}}"  class="btn btn-primary" data-bs-placement="top" data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left"></i></a>
</div>
    <div class="title h1 col-10">Assign Subjects For Class</div>
</div>
<div class="container m-5">
<div class="card">
                <div class="card-header">Assign Subject</div>
                <div class="card-body">
<form action="{{ route('admin.AssignSubjectsForGrade') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">For Grade</label>
                                    <select class="form-control" name="grade_id" id="exampleFormControlSelect1" required>
                                        <option>Choose ...</option>
                                            @foreach($classes as $grade)
                                                <option value="{{$grade->id}}">{{$grade->grade_name}}</option>
                                            @endforeach
                        
                                    </select>
                            </div>
                            <div>
                                <label for="subjects[]">Subjects:</label>

                                        @foreach ($subjects as $subject)
                                            <input type="checkbox" name="subjects[]" value="{{ $subject->id }}" required>
                                            <label>{{ $subject->subject_name}}</label><br>
                                        @endforeach
                             </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                        </div></div>
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