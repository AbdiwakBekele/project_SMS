@extends('partials.home')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@500&display=swap');
.title{
    font-family: 'Ysabeau SC', sans-serif;

}
html>*{
    color: black !important;
}
</style>
@endsection
@section('section')
<div class="container d-flex justify-content-center">
    <div class="title h1">Register STAFF</div>
</div>
<div class="d-flex justify-content-center align-items-center container">
    <form  class="needs-validation" novalidate>
        <div class="row">
            <div class="form-group col-6">
                <label for="first">First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first" placeholder="First Name" required>
            </div>
            <div class="form-group col-6">
                <label for="last">Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="last" placeholder="Last Name" required>
            </div>
        </div>
        <div class="row">
            <div class="col-6"><label for="birthday">Birthday:<span class="text-danger">*</span></label>
                <input type="date" id="birthday" name="birthday" required>
            </div>
            <div class="col-6"><label for="birthday">Gender:<span class="text-danger">*</span></label>
                <div class="form-check" required>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-6">
                <label for="first">Home Address<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first" placeholder="First Name" required>
            </div>
            <div class="form-group col-6">
                <label for="last">Citizenship<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first" placeholder="Citizenship" required>
              
            </div>
        </div>
       

        <!-- birth of date -->
       

        <div class="row">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Email address<span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-6">
        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
        <small class="form-text text-muted">Please enter your phone number in the format: (123) 456-7890</small>
      </div>
        </div>

        <div class="row">
        <div class="form-group col-6">
        <label for="phone">Qualification</label>
   
        <select class="form-control selectpicker" id="multiselect" multiple data-live-search="true" required>
  
  <option class="br-primary" value="2">BA Degree</option>

  <option class="br-primary" value="2">BS Degree</option>
  <option class="br-primary" value="3">MS Degree</option>
  <option class="br-primary" value="4">MA degree</option>
  <option value="5">other</option>
</select></div>
<div class="form-group col-6">
        <label for="phone">Subjects Taught</label>
   
        <select class="form-control selectpicker" id="multiselect" multiple data-live-search="true" required>
  
  <option class="br-primary" value="2">Math</option>

  <option class="br-primary" value="2">English</option>
  <option class="br-primary" value="3">Amharic</option>
  <option class="br-primary" value="4">Chemistry</option>
  <option class="br-primary" value="4">Physics</option>


  <option value="5">other</option>
</select></div>
        </div>
        <div class="form-group row">
        
        <figure class="col-6 text-center">
        <img src=""  id="chosen-image" accept="image/*" width="150" height="150">
            <figcaption> <div class=" btn btn-primary btn-rounded mt-2 " style="height: fit-content;">
                    <label class="form-label text-white m-1" for="upload-button">Add Staff Image <i class="fa fa-upload" aria-hidden="true"></i></label>
                    <input type="file" class="form-control d-none "  id="upload-button" required />
                </div></figcaption>
        </figure>
        <div class="col-6">
            <div class="card">
                <div class="card-header">Assigned class</div>
                <div class="card-body row">
                <div class="form-group col-6">
                <label for="phone">Classes to Teach</label>
   
   <select class="form-control selectpicker" id="multiselect" multiple data-live-search="true" required>

<option class="br-primary" value="2">1</option>

<option class="br-primary" value="2">BS Degree</option>
<option class="br-primary" value="3">MS Degree</option>
<option class="br-primary" value="4">MA degree</option>
<option value="5">other</option>
</select>
                </div>
            </div>
        </div>
               
             
                    
        
               
                </div>
        <div class="form-group w-75">
            <label for="exampleInputPassword1">Password<span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group w-75">
            <label for="confirm">Confirm Password<span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="confirm" placeholder="Password" required>
        </div>

        <div class="form-group w-75 ">
        <label for="phone">Roles</label>
   
        <select class="form-control selectpicker" id="multiselect" multiple data-live-search="true" required>
  
  <option class="br-primary" value="2">Admin</option>

  <option class="br-primary" value="2">Teacher</option>
  <option class="br-primary" value="3">School Dean Office</option>
  <option class="br-primary" value="4"></option>
  <option value="5">other</option>
</select></div>
        <div class="form-check w-75">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary " style="width: fit-content;">Submit</button>
    </form>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/script.js"></script>
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