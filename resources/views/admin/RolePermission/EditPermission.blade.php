<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="m-3">editing Permissions</h1>
    <div class="container m-5">
    <form action="{{url('admin/updatePermission')}}" method="post">
           @csrf
           @method('PUT')
            <div class="form-group">
            <input type="hidden" name="permission" value="{{ $permission->id }}">
            <label for="exampleInputPassword1">Permission</label>
            <input type="text" name="name"  class="form-control" id="exampleInputPassword1"  value="{{ $permission->name }}">
            </div>
            
            <button type="submit" class="btn btn-primary mt-4">Save</button>
        </form>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>