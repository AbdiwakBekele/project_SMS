@extends('admin.admin_sidebar')



@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('section')
<div class="container">
<div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Student Management</h2>
                        </div>
                    
                    </div>
                </div>


                <a class="link-opacity-10" href="{{route('admin.Students.RegisterStudents')}}"> <button type="button" class="btn btn-primary">Register New Students</button></a>
                

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
                @endif


                <table class="table table-bordered">
                <tr>
                <th>No</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="280px">Action</th>
                </tr>
                @foreach ($data as $key => $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
            
                        @foreach($student->getRoleNames() as $v)
                        
                     {{$v}}
                        @endforeach
                   
                    </td>
                    <td>
                      <a href="{{url('admin/students/'.$student->id.'/delete')}}"> Delete</a>
                    </td>
                </tr>
                @endforeach
                </table>
                {!! $data->render() !!}
    </div>
    @endsection
    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    @endsection