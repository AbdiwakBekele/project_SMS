<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="row ms-4">
    <div class='col-4 mt-5'>
    <a class="link-opacity-10" href="{{route('admin.AddingSections')}}"> <button type="button" class="btn btn-primary">Add Section</button></a>
        <table class="table border mt-3 border-2">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Grade</th>
              <th scope="col">Section</th>
              <th scope="col">home-Teacher</th>
              <th scope="col">Delete</th>


      
             </tr>
          </thead>
          <tbody>
            @foreach($sections as $section)
            <tr>
              <th scope="row">{{$section->id}}</th>
              <td>{{$section->grade->grade_name}}</td>
              <td>{{$section->section_name}}</td>
              <td>{{$section->userSection->full_name}}</td>
              <td>
                <a href="{{url('admin/sections/'.$section->id.'/delete')}}"> Delete</a>
              </td>

              
              
             
            </tr>
            
            @endforeach
            

          </tbody>
        </table>
    </div>
    <div class='col-4 ms-5  mt-5'>
    <a class="link-opacity-10" href="{{route('admin.AddingGrades')}}"> <button type="button" class="btn btn-primary">Add Grade</button></a>
        <table class="table border border-2 mt-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Grade</th>
              <th scope="col">Delete</th>

             </tr>
          </thead>
          <tbody>
            @foreach($grades as $grade)
            <tr>
              <th scope="row">{{$grade->id}}</th>
              <td>{{$grade->grade_name}}</td>
              <td>
                <a href="{{url('admin/grades/'.$grade->id.'/delete')}}"> Delete</a>
              </td>

            
            </tr>
            @endforeach
            

          </tbody>
    </div>
</div>
  </body>
</html>