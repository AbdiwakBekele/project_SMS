
@extends('pages.student.home')

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
            <h5 class="my-3"> <span class="text-danger">WELCOME </span>Kidest Manaye</h5>
            <p class="text-muted mb-1">Student</p>
         
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
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Johnatan Smith</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
              </div>
            </div>
          </div>
        </div>
  </div>
</section> 
<section class="container mb-4">
    <div class="card"><div class="card-header">Class And Subjects</div>
<div class="card-body row" style="background-color: #eee;">
    <div class="col-md-3">
        <div class="align-content-center">Class 9A</div>
    </div>
    <div class="col-md-7">
        <div class="align-content-center">
            <div class="h2">Subject List
            </div>
            <a href="" class="me-3">Amharic</a>
            <a href="" class="me-3">English</a>
            <a href="" class="me-3">Math</a>
            <a href="" class="me-3">Chemistry</a>
            <a href="" class="me-3">Physics</a>
            <a href="" class="me-3">Biology</a>
        </div>
    </div>
</div></div>
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