
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
<div class="">
<div class="card">
    <div class="card-header">
    <div class="card-header title h2">Grades</div>
    </div>

    <form action="">
        <div class="card-body row">
        <div class=" col-4 m-0">
                <label for="">Choose Year</label>
               <select name="" id="" class="selectpicker">
                <option value=""></option>
                <option value="">grade 1</option>
                <option value="">grade 2</option>
                <option value="">grade 3</option>
               </select>
            </div>
            
            <div class=" col-6 m-0">
                <label for="">Choose Semester</label>
                <select name="" id="" class="selectpicker">
                <option value="">Semester 1</option>
              <option value="">Semester 2</option>
              
               </select><span><button class="btn btn-primary">Search</button></span>
            </div>
            

        </div>

    </form>
</div>
    <div class="container">
       
<div class="row">@include('pages.student.gradeex')</div>
</div>
@endsection
@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

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
        },responsive: true,"lengthChange": false,  language: {
            searchPlaceholder: "Search by subject"
    }
        
  
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('.my-select').selectpicker();
</script>
<script src="{{ asset('node_modules/@material/data-table/dist/mdc.data-table.js') }}"></script>
@endsection