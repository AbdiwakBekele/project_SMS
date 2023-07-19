<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  
           <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
    <h1>Hello, Admin!</h1>
          <div class="row ms-5">
            <div class="col-4">
            @role('admin')
            <a class="link-opacity-10" href="{{route('admin.RPmanagement')}}"> <button type="button" class="btn btn-primary">R$Pmana</button></a>
            <a class="link-opacity-10" href="{{route('admin.Staff.ManageUsers')}}"> <button type="button" class="btn btn-primary">StaffManagment</button></a>
            @endrole
          
            <a class="link-opacity-10" href="{{route('admin.Parents.ManageParents')}}"> <button type="button" class="btn btn-primary">ParentsManagment</button></a>
           </div>
           <div class="col-4">
            <a class="link-opacity-10" href="{{route('admin.Students.ManageStudents')}}"> <button type="button" class="btn btn-primary">StudentsManagment</button></a>
              <button type="button" class="btn btn-warning">Warning</button>
              <button type="button" class="btn btn-info">Info</button>
           </div>
           <div class="col-4">
            
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
           </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>