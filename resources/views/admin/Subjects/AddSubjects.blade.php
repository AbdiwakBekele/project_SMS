<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="m-3">Adding Subjects</h1>
    <div class="container m-5">
    <form action="" method="post">
            @csrf
            <div class="form-group">
            <label for="exampleInputPassword1">Subject Name</label>
            <input type="text"name="subject_name" class="form-control" id="exampleInputPassword1" placeholder="Subject Name">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Subject Code</label>
            <input type="text"name="subject_code" class="form-control" id="exampleInputPassword1" placeholder="Subject Code">
            </div>
  
            <button type="submit" class="btn btn-primary mt-4">Add</button>
        </form>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>