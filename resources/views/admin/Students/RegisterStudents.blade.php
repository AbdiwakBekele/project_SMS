@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Students</h2>
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
             {!! Form::open(array('route' => 'admin.Students.registered','method'=>'POST')) !!}
                    <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Full Name:</strong>
                                    <!-- <input type="text"name="full_name" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                    {!! Form::text('student_name', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}

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
                                <strong>Student Age :</strong>
                                <!-- <input type="text"name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('age', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}


                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Year:</strong>
                                <!-- <input type="text"name="address" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('year', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}


                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Grade:</strong>
                                <!-- <input type="text"name="city" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                {!! Form::text('grade', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}



                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address:</strong>
                                {!! Form::text('address', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Parents Name:</strong>
                                <select class="form-control" id="exampleFormControlSelect1" name="parent_id">
                                    <option>Choose ...</option>
                                    @foreach($parents as $parent)
                                    <option value="{{$parent->id}}">{{$parent->parents_name}}</option>
                                   @endforeach
                                    
                                </select>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Mothers Name:</strong>
                                {!! Form::text('mothers_name', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Fathers Name:</strong>
                                {!! Form::text('fathers_name', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>School Branch:</strong>
                                <select class="form-control" id="exampleFormControlSelect1" name="school_branch">
                                    <option>Choose ...</option>
                                    <option>Branch A</option>
                                    <option>Branch B</option>
                                    <option>Branch C</option>
                                    
                                </select>

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