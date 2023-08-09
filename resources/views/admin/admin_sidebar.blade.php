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

<li class="nav-item {{ in_array(request()->route()->getName(), ['admin.RPmanagement', 'admin.createRole', 'admin.createPermission','admin.editrole','admin.editpermission']) ? 'active' : '' }}">

    <a class="nav-link" href="{{route('admin.RPmanagement')}}">
        <i class="fas fa-fw fa-tasks"></i>
        <span>Roles and Permissions</span></a>
</li>
<li class="nav-item {{ in_array(request()->route()->getName(), ['admin.Parents.ManageParents', 'admin.Parents.RegisterParents']) ? 'active' : '' }} ">

    <a class="nav-link" href="{{route('admin.Parents.ManageParents')}}">
        <i class="fas fa-fw fa-user"></i>
        <span>Parent Management</span></a>
</li>
<li class="nav-item {{ in_array(request()->route()->getName(), ['admin.Staff.ManageUsers', 'admin.Staff.RegisterUsers']) ? 'active' : '' }} ">
    <a class="nav-link" href="{{route('admin.Staff.ManageUsers')}}">
        <i class="fas fa-fw fa-user"></i>
        <span>Staff Management</span></a>
</li>

<li class="nav-item {{ in_array(request()->route()->getName(), ['admin.Students.ManageStudents', 'admin.Students.RegisterStudents']) ? 'active' : '' }} ">
    <a class="nav-link" href="{{route('admin.Students.ManageStudents')}}">
        <i class="fas fa-fw-2x fa-child"></i>
        <span>Student Management</span></a>
</li>
<li class="nav-item {{ in_array(request()->route()->getName(), ['admin.AddingSections', 'admin.AddingGrades','admin.ClassSection.ClassSectionManagement']) ? 'active' : '' }} ">
    <a class="nav-link" href="{{route('admin.ClassSection.ClassSectionManagement')}}">
        <i class="fas fa-fw fa-school"></i>
        <span>Class Section Management</span></a>
</li>
<li class="nav-item {{ in_array(request()->route()->getName(), ['admin.Subjects.ManageSubjects','admin.subjects.create', 'admin.subjects.AssignForClass','admin.subjects.AssignForTeacher']) ? 'active' : '' }} ">
    <a class="nav-link" href="{{route('admin.Subjects.ManageSubjects')}}">
        <i class="fas fa-fw fa-book-open"></i>
        <span>Subject Management</span></a>
</li>


<!-- Nav Item - Utilities Collapse Menu -->

      <!-- Nav Item - Pages Collapse Menu -->



</ul>
<!-- End of Sidebar -->

@endsection