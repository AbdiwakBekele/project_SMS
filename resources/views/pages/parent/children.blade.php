
@extends('pages.parent.home')

@section('styles')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('node_modules/@material/data-table/dist/mdc.data-table.css') }}">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" > -->

<style>


@import url('https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@500&display=swap');

    .title {
        font-family: 'Ysabeau SC', sans-serif;

    }
</style>
@endsection
@section('section')
<section style="background-color: #eee;">
  <div class="container py-5">
  <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"> <span class="text-danger">WELCOME </span>Mrs.Kidest Manaye</h5>
            <p class="text-muted mb-1">Parent</p>
         
            <div class="d-flex justify-content-center mb-2">
             
              <button type="button" class="btn btn-outline-primary ms-1">EDIT PROFILE</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
            <div class="title col-12">My Children </div>
<div class="col-md-12">@include('pages.parent.childlist')</div>
            </div>
          </div>
        </div>
  </div>
</section> 

@endsection
@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('.my-select').selectpicker();
</script>
<script src="{{ asset('node_modules/@material/data-table/dist/mdc.data-table.js') }}"></script>
@endsection