<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

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
             {!! Form::open(array('route' => 'admin.Staff.registered','method'=>'POST')) !!}
                    <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Full Name:</strong>
                                    <!-- <input type="text"name="full_name" class="form-control" id="exampleInputPassword1" placeholder="permission"> -->
                                    {!! Form::text('full_name', null, array('placeholder' => 'full_name','class' => 'form-control')) !!}

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
                                <strong>Literacy Level:</strong>
                                <select class="form-control" id="exampleFormControlSelect1" name="literacy_level">
                                    <option>Choose ...</option>
                                    <option>Bachelor's degree</option>
                                    <option>Masters's degree</option>
                                    <option>Certificate</option>
                                    <option>advanced diploma</option>
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
                   




                            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>