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

 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
        </div>
        
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

 <div class="container ms-5 mt-3">

        <!-- <form action="{{route('admin.Staff.registered')}}" method="post"> -->
                <!-- @csrf
             -->
             {!! Form::open(array('route' => 'admin.Parents.registered','method'=>'POST')) !!}
                    <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Full Name:</strong>
                                    <!-- <input type="text"name="full_name" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                    {!! Form::text('parents_name', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Email:</strong>
                                <!-- <input type="email"name="email" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::email('email', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}
                                
                                </div>
                            </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Phone Number:</strong>
                                <!-- <input type="text"name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('phone_number', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}


                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Phone Number-2:</strong>
                                <!-- <input type="text"name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('phone_number2', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}


                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address:</strong>
                                <!-- <input type="text"name="address" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('address', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}


                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>City:</strong>
                                <!-- <input type="text"name="city" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('city', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}



                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>State:</strong>
                                <!-- {!! Form::text('city', null, array('placeholder' => 'full_name','class' => 'form-control')) !!} -->
                                <!-- <input type="text"name="state" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('state', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}


                            </div>
                        </div>
                        
                      
                       
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Password:</strong>
                                <!-- <input type="text"name="password" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}

                                

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Confirm Password:</strong>
                                
                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Role:</strong>
                               
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
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