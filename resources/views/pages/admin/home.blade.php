@extends('partials.home')

@section('sidebar')
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <img src="{{asset('SM_frontend/img/download.png')}}" alt="" class="w-100">
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>


<!-- Nav Item - Utilities Collapse Menu -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item {{ request()->is('registerstudent','studentlist','Attendancereport') ? 'active' : '' }}">
                <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Students</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item {{ request()->is('registerstudent') ? 'active' : '' }} " href="{{url('registerstudent')}}"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Student</a>
                        <a class="collapse-item {{ request()->is('studentlist') ? 'active' : '' }} " href="{{url('studentlist')}}"><i class="fa fa-info-circle" aria-hidden="true"></i> View Student</a>
                        <a class="collapse-item {{ request()->is('Attendancereport') ? 'active' : '' }}" href="{{url('Attendancereport')}}"><i class="fa fa-calendar" aria-hidden="true"></i> Attendance Report</a>

                    </div>
                </div>
            </li>
            <li class="nav-item  {{ request()->is('registerstaff','stafflist') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseteacher"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-chalkboard-teacher " ></i>
                    <span>Staff</span>
                </a>
                <div id="collapseteacher" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item {{ request()->is('registerstaff') ? 'active' : '' }}" href="{{url('registerstaff')}}"><i class="fa fa-plus-square" aria-hidden="true"></i> Register New Staff </a>
                        <a class="collapse-item {{ request()->is('stafflist') ? 'active' : '' }}" href="{{url('stafflist')}}"><i class="fa fa-info-circle" aria-hidden="true"></i> Staff List</a>
                    </div>
                </div>
            </li>
            <li class="nav-item {{ request()->is('registerparent','parentlist') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseparent"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user" ></i>
                    <span>Parents</span>
                </a>
                <div id="collapseparent" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item {{ request()->is('registerparent') ? 'active' : '' }}" href="{{url('registerparent')}}"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Parent</a>
                        <a class="collapse-item {{ request()->is('parentlist') ? 'active' : '' }}" href="{{url('parentlist')}}"><i class="fa fa-info-circle" aria-hidden="true"></i> View Parents</a>
                    </div>
                </div>
            </li>
            <li class="nav-item {{ request()->is('roles','permissions') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseclass"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-bookmark" ></i>
                    <span>Role and Permission</span>
                </a>
                <div id="collapseclass" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item {{ request()->is('roles') ? 'active' : '' }}" href="{{url('roles')}}"><i class="fa fa-plus-square" aria-hidden="true"></i>Roles</a>
                        <a class="collapse-item {{ request()->is('permissions') ? 'active' : '' }}" href="{{url('permissions')}}"><i class="fa fa-info-circle" aria-hidden="true"></i> Permissions</a>
                    </div>
                </div>
            </li>
            




<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
</li> -->

<!-- Nav Item - Charts -->
<!-- <li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li> -->

<!-- Nav Item - Tables -->
<!-- <li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li> -->

<!-- Divider -->
<!-- <hr class="sidebar-divider d-none d-md-block"> -->

<!-- Sidebar Toggler (Sidebar) -->
<!-- <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> -->

<!-- Sidebar Message -->
<!-- <div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div> -->

</ul>
<!-- End of Sidebar -->

@endsection