@extends('pages.admin.home')



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
        Find Student By
    </div>
    <div class="card-body">
        <form action="{{url('register')}}">
            <div class="row">
                <div class="form-group col-5">
                    <label for="">Category</label>
                    <select name="" id="" class="form-control selectpicker" required>
                        <option value=""></option>
                        <option value="">ID</option>
                        <option value="">NAME</option>
                        <option value="">EMAIL</option>
                       
                    </select>
                </div>
                <div class="form-group col-5">
                <label for="">Find</label>
<input type="text" name="" id="" class="form-control" required placeholder="Search for">
                </div>
                
            </div>
            <div class="">
                    
                    <button class="btn-primary rounded">Search <i class="fa fa-search" aria-hidden="true"></i></button>
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

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection