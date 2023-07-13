@extends('pages.teacher.homeside')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
@endsection
@section('section')
<div class="container">
    <div class="card">
<div class="card-header">
   <span class="h2"> Class</span> <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
</div>
   
<div class="row card-body">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
          <h5 class="my-3">CLASS <i class="fa fa-arrow-right" aria-hidden="true"></i> <span class="text-danger">9 </span><span class="text-success">A </span></h5>
            <p class="text-muted mb-1">SUBJECT TAUGHT <i class="fa fa-arrow-right" aria-hidden="true"></i> <span class="text-success">ENGLISH</span></p>
           
         
            <div class="d-flex justify-content-center mb-2">
             
              <button type="button" class="btn btn-outline-primary ms-1">EDIT PROFILE</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 text-center">
        <button class="btn btn-outline-primary w-100 mb-2"><i class="fa fa-list" aria-hidden="true"></i> Student List</button>
        <button class="btn btn-outline-success w-100 mb-2"><i class="fa fa-book" aria-hidden="true"></i> Manage Grade</button>
        <button class="btn btn-outline-danger  w-100 mb-2"> <i class="fa fa-plus-square" aria-hidden="true"></i> Add Grade </button>
        <button class="btn btn-outline"></button>
      </div>
</div>
</div>
</div>


@endsection
@section('scripts') 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>$('#example').DataTable();
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});</script>
@endsection