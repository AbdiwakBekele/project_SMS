@extends('partials.home')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
@endsection
@section('section')
<div class="container text-center h1">Manage Classes,Sections,Roles</div>
<div class="row"><button class="btn btn-danger offset-1 col-4"><i class="fa fa-book me-3" aria-hidden="true"></i>Manage Classes,Section</button></div>
<div class="container text-center h1">Add Users</div>
<div class="row"><button class="btn btn-primary offset-1 col-4"><i class="fa fa-plus-circle me-3" aria-hidden="true"></i>Add Student</button><button class="btn btn-success offset-1 col-4"><i class="fa fa-plus-circle me-3" aria-hidden="true"></i>Add Teacher</button></div>

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