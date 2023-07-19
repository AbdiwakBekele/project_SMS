<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="row ms-5 col-6 mt-5">
  <a class="link-opacity-10 mt-3" href="{{route('admin.AddingSubjects')}}"> <button type="button" class="btn btn-primary">Add Subjects</button></a>
  <a class="link-opacity-10 mt-3" href=""> <button type="button" class="btn btn-primary">Assign Subject to Class</button></a>

  <a class="link-opacity-10 mt-3" href=""> <button type="button" class="btn btn-primary">Assign Subject to Teachers</button></a>

        <table class="table border border-2 mt-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Subject Name</th>
              <th scope="col">Subject Code</th>
             </tr>
          </thead>
          <tbody>
            @foreach($subjects as $subject)
            <tr>
              <th scope="row">{{$subject->id}}</th>
              <td>{{$subject->subject_name}}</td>
              <td>{{$subject->subject_code}}</td>

              

            
            </tr>
            @endforeach
            

          </tbody>
    </div>
</div>
  </body>
</html>