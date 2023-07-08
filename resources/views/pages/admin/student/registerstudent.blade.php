@extends('partials.home')
@section('styles')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@500&display=swap');
.title{
    font-family: 'Ysabeau SC', sans-serif;

}
</style>

@endsection
@section('section')

<div class="container d-flex justify-content-center">
    <div class="title h1">Register Student</div>
</div>
<div class="d-flex justify-content-center align-items-center">
    <form class="w-70">
        <div class="row">
            <div class="form-group col-6">
                <label for="first">First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first" placeholder="First Name">
            </div>
            <div class="form-group col-6">
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
            <div class="form-group col-6">
                <label for="last">Citizenship<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first" placeholder="Citizenship" value="Ethiopian" >
              
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="first">Mother/Gurdians Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first" placeholder="Mother/Gurdians Name">
            </div>
            <div class="form-group col-6">
                <label for="last">Fathers/Guardians Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="last" placeholder="Father/Gurdians Name">
            </div>
        </div>
<!-- -->


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
        <div class="form-group row">
        
<figure class="col-6 text-center">
<img src=""  id="chosen-image" accept="image/*" width="150" height="150">
    <figcaption> <div class=" btn btn-primary btn-rounded mt-2 " style="height: fit-content;">
            <label class="form-label text-white m-1" for="upload-button">Add Student Image <i class="fa fa-upload" aria-hidden="true"></i></label>
            <input type="file" class="form-control d-none "  id="upload-button" />
        </div></figcaption>
</figure>
<div class="col-6">
    <div class="card">
        <div class="card-header">Assigned class</div>
        <div class="card-body row">
        <div class="form-group col-6">
                <label for="first">Class<span class="text-danger">*</span></label>
                <input type="Number" class="form-control" id="first" min=1 value="1">
            </div>
            <div class="form-group col-6">
                <label for="last">Section<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="last" maxlength="1">
            </div>
        </div>
    </div>
</div>
       
     
            

       
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
@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js"></script>
<script src="js/script.js">

</script>
@endsection