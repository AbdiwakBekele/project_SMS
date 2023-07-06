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
    <div class="title h1">Parent Registration Form</div>
</div>
<div class="container">
    <div class="card"><div class="card-header">
        Register Parent of <button class="btn-success" disabled> Kiya Tilahun </button>
    </div> 
    <div class="card-body">
    <!-- onsubmit ="return validateForm()" -->
        <form action="" class="needs-validation" novalidate >
            <div class="row">
                <div class="form-group col-5">
                    <label for="">Parent/GuardianName</label>
                    <select name="" id="" class="form-control selectpicker show-tick" required>
                        <option value=""></option>
                        <option value="">Mother/Gurdian ---</option>
                        <option value="">NAME</option>
                        
                       
                    </select>
                </div>
                <div class="form-group col-5">
                <label for="">Email <span class="text-danger">*</span></label>
<input type="Email" name="" id="" class="form-control" required placeholder="someone@example.com" autocomplete="on">
                </div>
                
            </div>
            <div class="row">
                <div class="form-group col-5">
                    <label for="password">Password <span class="text-danger">*</span></label>
             <input type="password" name="" id="pswd1" class="form-control" required minlength="8" maxlength="8">
                </div>
                <div class="form-group col-5">
                <label for="pswd2">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" name="" id="confirm-password" class="form-control" data-match="#pswd1" required minlength="8" maxlength="8">
                <span id = "message1" style="color:red"> </span> <br><br>    
            </div>
                
            </div>
            <div class="">
                    
                    <button class="btn-primary rounded">Register <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
        </form>
    </div>
</div>
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

 

                   
      form.classList.add('was-validated');
    
                }, false)
            })
        })()
    </script>
    <!-- <script>function validateForm() {  
    //collect form data in JavaScript variables  
    var pw1 = document.getElementById("pswd1").value;  
    var pw2 = document.getElementById("pswd2").value;
    if(pw1 != pw2) {  
      document.getElementById("message1").innerHTML = "**Passwords are not same";  
      return false;  
    } 
    else
    {
        return true;
    } }</script> -->
@endsection