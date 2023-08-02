<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="m-3">Assign Subjects For Class</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Subject</div>

                    <div class="card-body">
                        <form action="{{ route('admin.AssignSubjectsForGrade') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">For Grade</label>
                                    <select class="form-control" name="grade_id" id="exampleFormControlSelect1">
                                        <option>Choose ...</option>
                                            @foreach($classes as $grade)
                                                <option value="{{$grade->id}}">{{$grade->grade_name}}</option>
                                            @endforeach
                        
                                    </select>
                            </div>
                            <div>
                                <label for="subjects[]">Subjects:</label>

                                        @foreach ($subjects as $subject)
                                            <input type="checkbox" name="subjects[]" value="{{ $subject->id }}">
                                            <label>{{ $subject->subject_name}}</label><br>
                                        @endforeach
                             </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>