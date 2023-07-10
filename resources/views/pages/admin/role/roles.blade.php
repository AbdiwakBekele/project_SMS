@extends('pages.admin.home')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
@endsection
@section('section')
<div class="d-flex justify-content-end">
<a href="{{url('addrole')}}"> <button class="btn btn-success me-5">Create Role</button></a>
</div>
<div class="d-flex justify-content-center">
    <div class="h1">Roles</div>
</div>
<table class="table m-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Roles</th>
      <th scope="col">Permissions</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><ul class="list-inline m-0">
      <li class="list-inline-item">
                                              <a href="{{url('updaterole')}}">      <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></li>
             
        </ul>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



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