
@extends('pages.admin.home')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


@endsection
@section('section')

<div class="d-flex justify-content-start p-3 h1">
    Add Role
</div> 
<div class="row w-50 m-4">
<form action="">
            <div class="form-group">
                <label for="id1">Role Name</label>
                <input class="form-control" type="text" 
                    id="id1" placeholder="Role Name">
            </div>
            <div class="form-group">
                <label for="id2">Permissions</label>
                
                <select class="form-control selectpicker" id="multiselect" multiple data-live-search="true" title="permissions">
  
  <option class="br-primary" value="2">BA Degree</option>

  <option class="br-primary" selected value="2">BS Degree</option>
  <option class="br-primary" selected value="3">MS Degree</option>
  <option class="br-primary" value="4">MA degree</option>
  <option value="5">other</option>
</select>
            </div>
            <div class="container">
             
                <button type="button" class="btn btn-secondary">
                    Add Role
                </button>
            </div>
        </form>
</div>


@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

@endsection