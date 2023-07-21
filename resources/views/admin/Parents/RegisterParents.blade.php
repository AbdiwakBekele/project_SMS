@extends('admin.admin_sidebar')



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
<div class="row d-flex justify-content-center ms-5 mt-3 ">
<div class="col-2">
    <a href=" {{route('admin.Parents.ManageParents')}}"  class="btn btn-primary" data-bs-placement="top" data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left"></i></a>
</div>
    <div class="title h1  col-10">Create New Parent</div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <label>Whoops!</label> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

 <div class="container ms-5 mt-3 mb-4">

        <!-- <form action="{{route('admin.Staff.registered')}}" method="post"> -->
                <!-- @csrf
             -->
             {!! Form::open(array('route' => 'admin.Parents.registered','method'=>'POST','class'=> 'needs-validation',' novalidate')) !!}
                    <div class="container"  >
                            <div class="row">   
                                <div class="form-group col-md-6">
                                    <label>Full Name: <span class="text-danger">*</span></label>
                                    <!-- <input type="text"name="full_name" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                    {!! Form::text('parents_name', null, array('placeholder' => 'full_name','class' => 'form-control','required')) !!}

                                </div>
                            
                                <div class="form-group col-md-6">
                                <label>Email: <span class="text-danger">*</span></label>
                                <!-- <input type="email"name="email" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::email('email', null, array('placeholder' => 'email','class' => 'form-control','required')) !!}
                                
                                </div>
                            </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Phone Number: <span class="text-danger">*</span></label>
                                <!-- <input type="text"name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('phone_number', null, array('placeholder' => 'phone','class' => 'form-control','required')) !!}


                            </div>
                     
                            <div class="form-group col-md-6">
                                <label>Phone Number-2: <span class="text-danger">*</span></label>
                                <!-- <input type="text"name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('phone_number2', null, array('placeholder' => 'phone#2','class' => 'form-control')) !!}


                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Address: <span class="text-danger">*</span></label>
                                <!-- <input type="text"name="address" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control','required')) !!}


                            </div>
                       
                            <div class="form-group col-md-6">
                                <label>City: <span class="text-danger">*</span></label>
                                <!-- <input type="text"name="city" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('city', null, array('placeholder' => 'City','class' => 'form-control','required')) !!}



                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>State: <span class="text-danger">*</span></label>
                                <!-- {!! Form::text('city', null, array('placeholder' => 'full_name','class' => 'form-control')) !!} -->
                                <!-- <input type="text"name="state" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('state', null, array('placeholder' => 'State','class' => 'form-control','required')) !!}


                            </div>
                       
                            <div class="form-group col-md-6">
                                <label>Password: <span class="text-danger">*</span></label>
                                <!-- <input type="text"name="password" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','required')) !!}

                                

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Confirm Password: <span class="text-danger">*</span></label>
                                
                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control','required')) !!}

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Role:</label>
                               
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple','required')) !!}

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {!! Form::close() !!}

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