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
<li class="nav-item {{ request()->route()->named('admin.admindashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('admin.admindashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<li class="nav-item {{ in_array(request()->route()->getName(), ['admin.RPmanagement', 'admin.createRole', 'admin.createPermission']) ? 'active' : '' }}">

    <a class="nav-link" href="{{route('admin.RPmanagement')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Roles and Permissions</span></a>
</li>

<li class="nav-item {{ request()->route()->named('admin.Parents.ManageParents') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('admin.Parents.ManageParents')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Parent Management</span></a>
</li>
<li class="nav-item {{ in_array(request()->route()->getName(), ['admin.Staff.ManageUsers', 'admin.Staff.RegisterUsers']) ? 'active' : '' }} ">
    <a class="nav-link" href="{{route('admin.Staff.ManageUsers')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Staff Management</span></a>
</li>

<li class="nav-item {{ in_array(request()->route()->getName(), ['aadmin.Students.ManageStudents', 'admin.Students.RegisterStudents']) ? 'active' : '' }} ">
    <a class="nav-link" href="{{route('admin.Students.ManageStudents')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Student Management</span></a>
</li>


<!-- Nav Item - Utilities Collapse Menu -->

      <!-- Nav Item - Pages Collapse Menu -->



</ul>
<!-- End of Sidebar -->

@endsection