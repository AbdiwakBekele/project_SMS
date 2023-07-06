@extends('partials.home')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css
" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" >

<style>
    @import url('https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@500&display=swap');

    .title {
        font-family: 'Ysabeau SC', sans-serif;

    }
</style>
@endsection
@section('section')
<div class="container-fluid">
<div class="container d-flex justify-content-center">
    <div class="title h1"> Student List</div>
</div>

<div class="container">

    <form action="" class="row ">
        <div class="form-group col-6">
            <label for="">Choose Category</label>
            <select class="form-control w-75">
                <option value="" disabled selected>Find Students by...</option>
                <option>Class</option>
                <option>Id</option>
                <option>Age</option>
            </select>
        </div>
        <div class="form-group col-4 d-inline row">
        <label for="">Search For</label>
        <div class="row">
        <input type="text" placeholder="Search.." name="search" class="form-control col-9" >  <button class="btn btn-primary col-3" data-toggle="tooltip" data-placement="top" title="Search"><i class="fa fa-search" aria-hidden="true"></i></button> </div>
        </div>
<div class="search col-2">
    <div class="d-block"></div>
   
</div>
    </form>

</div>
<div class="row">@include('pages.admin.example')</div>
</div>
@endsection
@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $('#example').DataTable({


        initComplete: function() {


            this.api()
                .columns()
                .every(function(index) {
                    if((index===0) && (index===2)){
                    var column = this;
                    var title = column.footer().textContent;

                    // Create input element and add event listener
                    $('<input type="text" placeholder="Search ' + title + '" />')
                        .appendTo($(column.footer()).empty())
                        .on('keyup change clear', function() {
                            if (column.search() !== this.value) {
                                column.search(this.value).draw();
                            }
                        });}
                });
        },  dom: 'Bfrtip',
                responsive: true,
                pageLength: 25,
                // lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],

                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]

        
  
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('.my-select').selectpicker();
</script>
@endsection