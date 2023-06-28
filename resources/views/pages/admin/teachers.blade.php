@extends('partials.home')
@section('section')

<div class="d-flex justify-content-center align-items-center">
    <form class="w-70">
        <div class="row">
            <div class="form-group col-6">
                <label for="first">First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="last">Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="last" placeholder="Last Name">
            </div>
        </div>
        <div class="row">
            <div class="col-6"><label for="birthday">Birthday:<span class="text-danger">*</span></label>
                <input type="date" id="birthday" name="birthday">
            </div>
            <div class="col-6"><label for="birthday">Gender:<span class="text-danger">*</span></label>
                <div class="form-check">
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
                <input type="text" class="form-control" id="first" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="last">Citizenship<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first" placeholder="Citizenship">
              
            </div>
        </div>
       

        <!-- birth of date -->
       

        <div class="row">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Email address<span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
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
        <select class="form-select" id="multiple-select-field" data-placeholder="Choose anything" multiple>
  <option value="1">BA Degree</option>
  <option value="2">BS Degree</option>
  <option value="3">MS Degree</option>
  <option value="4">MA degree</option>
  <option value="5">other</option>
</select></div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password<span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="confirm">Confirm Password<span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="confirm" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection