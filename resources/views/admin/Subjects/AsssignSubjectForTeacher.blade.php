
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
    <div class="title h1 col-10">Assign Subjects and Classes For Teacher</div>
</div>
<div class="container m-5">
<form action="{{ route('admin.AssignSubjectsForTeacher') }}" method="POST" class="needs-validation" novalidate >
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">For Teacher</label>
                                    <select class="form-control" name="user_id" id="exampleFormControlSelect1" required>
                                        <option>Choose ...</option>
                                            @foreach($users as $teacher)
                                                <option value="{{$teacher->id}}">{{$teacher->full_name}}</option>
                                            @endforeach
                        
                                    </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="classes" class="ms-3 h5">Subjects</label><br>
                                @foreach ($subjects as $subject)
                                    <label>
                                        <input type="checkbox" name="subject_id" value="{{ $subject->id }}" required> {{ $subject->subject_name }} 
                                    </label><br>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <label for="classes" class="ms-3 h5">Classes</label><br>
                                @foreach ($classes as $grade)
                                    <label>
                                        <input type="checkbox" name="classes[]" value="{{ $grade->id }}" required> {{ $grade->grade_name }}
                                    </label><br>
                                @endforeach
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
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