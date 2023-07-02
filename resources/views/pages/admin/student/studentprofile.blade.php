@extends('partials.home')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
@endsection
@section('section')
<!-- <div class="row">
    <div class="name offset-2 mb-3">KIYA TILAHUN  <span class="user me-1"><button disabled="disabled" class="btn btn-danger">STUDENT</button></span> <span class="user me-1"><button disabled="disabled" class="btn btn-dark">MALE</button></span></div>
  
</div> -->
<div class="row">
    <div class="col-3 d-flex align-items-center flex-column">
    <div><img class="overflow-hidden img-fluid rounded " src="{{asset('images/avatar.jpg')}}"  width="150"  alt=""></div>
    <div class="name mb-3">KIYA TILAHUN  </div>
    <div>
    <span class="user me-1"><button disabled="disabled" class="btn btn-danger">STUDENT</button></span> <span class="user me-1"><button disabled="disabled" class="btn btn-dark">MALE</button></span></div>
    </div>

    <div class="col-9">

<table class="table">
    <tbody >
        <tr class="w-70">
    <th class="row-header" scope="row">Student ID</th>
    <td>456</td>
    <th class="row-header" scope="row">Class</th>
    <td>9</td>

    </tr>
      <tr class="w-70">
    <th class="row-header" scope="row">Student ID</th>
    <td>456</td>
    <th class="row-header" scope="row">Class</th>
    <td>9</td>
    
    </tr>  <tr class="w-70">
    <th class="row-header" scope="row">Student ID</th>
    <td>456</td>
    <th class="row-header" scope="row">Class</th>
    <td>9</td>
    
    </tr>  <tr class="w-70">
    <th class="row-header" scope="row">Student ID</th>
    <td>456</td>
    <th class="row-header" scope="row">Class</th>
    <td>9</td>
    
    </tr>  <tr class="w-70">
    <th class="row-header" scope="row">Student ID</th>
    <td>456</td>
    <th class="row-header" scope="row">Class</th>
    <td>9</td>
    
    </tr>  <tr class="w-70">
    <th class="row-header" scope="row">Student ID</th>
    <td>456</td>
    <th class="row-header" scope="row">Class</th>
    <td>9</td>
    
    </tr>  <tr class="w-70">
    <th class="row-header" scope="row">Student ID</th>
    <td>456</td>
    <th class="row-header" scope="row">Class</th>
    <td>9</td>
    
    </tr>  <tr class="w-70">
    <th class="row-header" scope="row">Student ID</th>
    <td>456</td>
    <th class="row-header" scope="row">Class</th>
    <td>9</td>
    
    </tr>
    </tbody>
</table>
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