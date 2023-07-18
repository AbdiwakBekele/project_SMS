@extends('pages.admin.home')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<link href="
https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css
" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('section')

<div class="d-flex justify-content-start p-3 h1">
    Student'sAttendance Report
</div>

<div class="container">
<div class="card">
    <div class="card-header">
      Kiya Tilahun    /  Ru0151/12  / Class (9A)
    </div>

   <div class="card-body"> @include('pages.admin.studex')</div>
</div>
</div>


@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/js/bootstrap-select.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $('#example').DataTable({


        initComplete: function() {


            this.api()
                .columns()
                .every(function(index) {
                    if(index!==1){
                    var column = this;
                    var title = column.footer().textContent;

                    // Create input element and add event listener
                    $('<input type="date" placeholder="Search ' + title + '" />')
                        .appendTo($(column.footer()).empty())
                        .on('keyup change clear', function() {
                            if (column.search() !== this.value) {
                                column.search(this.value).draw();
                            }
                        });}
                });
        },
        columnDefs: [{
            targets: [1], // Index of the column (0-based)
            sortable: false, // Disable sorting for this column
            searching: false // Disable searching for this column
        },
   ],
       
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });


</script>
@endsection
@endsection