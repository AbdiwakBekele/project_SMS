@extends('partials.home')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


@endsection
@section('section')

<div class="d-flex justify-content-start p-3 h1">
    Attendance Report
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title">Search Attendance</div>
    </div>

    <form action="">
        <div class="card-body row">
            <div class=" col-md-2">
                <label for="">Student_id</label>
                <input type="text" class="form-control" placeholder="id">
            </div>
            <div class=" col-md-2">
                <label for="">First Name</label>
                <input type="text" class="form-control" placeholder="firstname">
            </div>
          
            <div class=" col-md-2">
                <label for="">class</label>
                <select class="form-control w-75">
                    <option value="" disabled selected>--class list--</option>
                    <option>1A</option>
                    <option>1B</option>
                    <option>@A</option>
                </select>
            </div>
            <div class=" col-md-2 m-0">
                <label for="">Attendance Day</label>
                <input type="date" name="" id="">
            </div>
            <div class="col-md-4 m-0">
                <label for="">Attendance Type</label>
               <div class="row"> <select class="form-control w-75">
                    <option value="" disabled selected>--type--</option>
                    <option>Present</option>
                    <option>Absent</option>
                   
                </select>
                <button type="submit" class=" btn-primary ml-3">Search</button></div>
            </div>

        </div>

    </form>
</div>
<div class="container">
<div class="card">
    <div class="card-header">
       Attendance List
    </div>

   <div class="card-body"> @include('pages.admin.examp')</div>
</div>
</div>


@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

@endsection