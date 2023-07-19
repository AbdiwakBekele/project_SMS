<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>


                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Parents Management</h2>
                        </div>
                    
                    </div>
                </div>


                <a class="link-opacity-10" href="{{route('admin.Parents.RegisterParents')}}"> <button type="button" class="btn btn-primary">Register New Parents</button></a>
                

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
                @endif


                <table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $parent)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $parent->parents_name }}</td>
    <td>{{ $parent->email }}</td>
    <td>
      @if(!empty($parent->getRoleNames()))
        @foreach($parent->getRoleNames() as $v)
           <!-- <label class="badge badge-success">{{ $v }}</label> -->
           {{ $v }}
        @endforeach
      @endif
    </td>
        <td>
          <a href="{{url('admin/parents/'.$parent->id.'/delete')}}"> Delete</a>
        </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>






