@extends('admin.admin_sidebar')



@section('styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

@endsection
@section('section')
<div class="container ">
<div class="row d-flex justify-content-center ms-5 mt-2 ">
<div class="col-2">
    <a href="{{route('admin.Staff.ManageUsers')}}"  class="btn btn-primary" data-bs-placement="top" data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left"></i></a>
</div>
    <div class="title h1 col-10">Create New Staff</div>
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
             {!! Form::open(array('route' => 'admin.Staff.registered','method'=>'POST','class'=>'needs-validation','novalidate')) !!}
                    <div class="container">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Full Name:</label>
                                    <!-- <input type="text"name="full_name" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                    {!! Form::text('full_name', null, array('placeholder' => 'full_name','class' => 'form-control','required')) !!}

                                </div>
                           
                                <div class="form-group col-md-6">
                                <label>Email:</label>
                                <!-- <input type="email"name="email" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control','required')) !!}
                                
                                </div>
                            </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Phone Number:</label>
                                <!-- <input type="text"name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('phone_number', null, array('placeholder' => 'Phone','class' => 'form-control','required')) !!}


                            </div>
                        
                            <div class="form-group col-md-6">
                                <label>Address:</label>
                                <!-- <input type="text"name="address" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control','required')) !!}


                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>City:</label>
                                <!-- <input type="text"name="city" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('city', null, array('placeholder' => 'City','class' => 'form-control','required')) !!}



                            </div>
                        
                            <div class="form-group col-md-6">
                                <label>State:</label>
                                <!-- {!! Form::text('city', null, array('placeholder' => 'full_name','class' => 'form-control')) !!} -->
                                <!-- <input type="text"name="state" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('state', null, array('placeholder' => 'State','class' => 'form-control'),'required') !!}


                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Literacy Level:</label>
                                <select class="form-control" id="exampleFormControlSelect1" title="Choose Level" name="literacy_level" required>
                                    <option data-hidden="true">Choose ...</option>
                                    <option>Bachelor's degree</option>
                                    <option>Masters's degree</option>
                                    <option>Certificate</option>
                                    <option>advanced diploma</option>
                                </select>

                            </div>
                      
                            <div class="form-group col-md-6">
                                <label>Password:</label>
                                <!-- <input type="text"name="password" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','required')) !!}

                                

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Confirm Password:</label>
                                
                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control','required')) !!}

                            </div>
                  
                            <div class="form-group col-md-6">
                                <label>Role:</label>
                               
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12  ">
                            <button type="submit" class="btn btn-primary">Save User</button>
                        </div>
                    </div>
                    {!! Form::close() !!}

</div>
    </div>
    @endsection
    @section('scripts')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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