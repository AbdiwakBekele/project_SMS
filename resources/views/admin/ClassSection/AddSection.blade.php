@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
<script>
           function validateLetters(input) {
      var regex = /^[A-Za-z]+$/;
      return regex.test(input);
    }
         function validateInput() {
      var userInput = document.getElementById("section_input").value;
    

      if (validateLetters(userInput)) {
        return true;
      } else {
        return false;
      }
    }
</script>

@endsection
@section('section')

<div class="container">

        <div class="row">
                <div class="col-2">
                        <a href="{{route('admin.ClassSection.ClassSectionManagement')}}" class="btn btn-primary" data-bs-placement="top" data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="title h1 col-10">Add New Section</div>
        </div>
        <form action="{{route('admin.AddSections')}}" class="needs-validation"  method="post" novalidate>
                @csrf
                <div class="form-group">
                        <label for="section_input">Section</label>
                        <input type="text" name="section_name" class="form-control" pattern="[A-Za-z]+"  title="add only letter" id="section_input" placeholder="Section" required maxlength="1">
                </div>

                <div class="form-group">
                        <label for="exampleFormControlSelect1">Grade</label>
                        <select class="form-control" name="grade_id" id="exampleFormControlSelect1" required>
                                <option>Choose ...</option>
                                @foreach($grades as $grade)
                                <option value="{{$grade->id}}">{{$grade->grade_name}}</option>
                                @endforeach

                        </select>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlSelect1">Home-Teacher </label>
                        <select class="form-control" name="user_id" id="exampleFormControlSelect1">
                                <option>Choose ...</option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->full_name}}</option>
                                @endforeach

                        </select>
                </div>

                <button type="submit" class="btn btn-primary mt-4" >Add</button>
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