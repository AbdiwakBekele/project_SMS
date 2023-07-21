@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')

<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-2">
    <a href="{{route('admin.Students.ManageStudents')}}"  class="btn btn-primary" data-bs-placement="top" data-toggle="tooltip" title="Go Back"><i class="fa fa-arrow-left"></i></a>
</div>
    <div class="title h1 col-10">Register New Student</div>
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

 <div class="d-flex justify-content-center align-items-center mb-3">

        <!-- <form action="{{route('admin.Staff.registered')}}" method="post"> -->
                <!-- @csrf
             -->
             {!! Form::open(array('route' => 'admin.Students.registered','method'=>'POST','class'=>'needs-validation','novalidate')) !!}
                    <div class="row">
                            <div class="row">
                                <div class="form-group col-md-6">
                                <label for="first">Full Name <span class="text-danger">*</span></label>

                                    <!-- <input type="text"name="full_name" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                    {!! Form::text('student_name', null, array('placeholder' => 'full_name','class' => 'form-control','required')) !!}

                                </div>
                            
                           
                                <div class="form-group col-md-6">
                               <label for="">Email <span class="text-danger">*</span></label>
                                <!-- <input type="email"name="email" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::email('email', null, array('placeholder' => 'full_name','class' => 'form-control','required')) !!}
                                
                                </div>
                            </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Student Age: <span class="text-danger">*</span></label>
                                <!-- <input type="text"name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('age', null, array('placeholder' => 'student_age','class' => 'form-control','required')) !!}


                            </div>
                       
                            <div class="form-group col-md-6">
                               <label for="">Year <span class="text-danger">*</span></label>
                                <!-- <input type="text"name="address" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('year', null, array('placeholder' => 'year','class' => 'form-control'),'required') !!}


                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                              <label for="">Grade <span class="text-danger">*</span></label>
                                <!-- <input type="text"name="city" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('grade', null, array('placeholder' => 'grade','min'=>'0','class' => 'form-control','required')) !!}



                            </div>
                        
                            <div class="form-group col-md-6">
                               <label for="">Address <span class="text-danger">*</span></label>
                                {!! Form::text('address', null, array('placeholder' => 'address','class' => 'form-control','required')) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Parents name</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="parent_id">
                                    <option>Choose ...</option>
                                    @foreach($parents as $parent)
                                    <option value="{{$parent->id}}">{{$parent->parents_name}}</option>
                                   @endforeach
                                    
                                </select>

                            </div>
                        
                            <div class="form-group col-md-6">
                                <label>Mothers Name: <span class="text-danger">*</span></label>
                                {!! Form::text('mothers_name', null, array('placeholder' => 'mothers_name','class' => 'form-control','required')) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Fathers Name:</label>
                                {!! Form::text('fathers_name', null, array('placeholder' => 'fathers_name','class' => 'form-control','required')) !!}
                            </div>
                       
                            <div class="form-group col-md-6">
                                <label for="">School Branch <span class="text-danger">*</span></label>
                                <select class="form-control" id="exampleFormControlSelect1" name="school_branch">
                                    <option>Choose ...</option>
                                    <option>Branch A</option>
                                    <option>Branch B</option>
                                    <option>Branch C</option>
                                    
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Password: <span class="text-danger">*</span></label>
                                <!-- <input type="text"name="password" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','required')) !!}

                                

                            </div>
                       
                            <div class="form-group col-md-6">
                                <label>Confirm Password:</label>
                                
                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control','required')) !!}

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Role:</label>
                               
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

                            </div>
                        </div>
         
                        <div class="col-xs-12 col-sm-12 col-md-12 ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {!! Form::close() !!}

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