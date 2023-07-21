<?php

use App\Http\Controllers\Admin\ClassSectionController;
use App\Http\Controllers\Admin\RoleAndPermissionController;
use App\Http\Controllers\Parent\ParentRegisterController;

use App\Http\Controllers\ProfileController;


// use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserRegisterController;
use App\Http\Controllers\Subject\SubjectController;




use App\Http\Controllers\Student\StudentRegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin', function () {
//     return view('admin.admindashboard');
// })->middleware(['auth', 'role:admin'])->name('admin.admindashboard');

Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function(){
            Route::get('/',[DashboardController::class,'admindashboard'])->name('admindashboard');
            Route::get('/roles',[RoleAndPermissionController::class,'index'])->name('RPmanagement')->middleware('role:admin');
            

            // Gradesssss
            Route::get('/classSections',[ClassSectionController::class,'index'])->name('ClassSectionManagement')->middleware('role:admin');
            Route::get('/addGrades',[ClassSectionController::class,'createGrade'])->name('AddingGrades');
            Route::post('/grades',[ClassSectionController::class,'storeGrade'])->name('AddGrades');
            Route::get('grades/{grade_id}/delete',[ClassSectionController::class,'destroyGrade']);

            // subjectssss
            Route::get('/subjects',[SubjectController::class,'index'])->name('Subject.SubjectManagement');
            Route::get('/addSubjects',[SubjectController::class,'create'])->name('AddingSubjects');




            // Sectionsssss
            Route::get('/addSections',[ClassSectionController::class,'createSection'])->name('AddingSections');
            Route::post('/sections',[ClassSectionController::class,'storeSection'])->name('AddSections');
            Route::get('sections/{section_id}/delete',[ClassSectionController::class,'destroySection']);

           





            // Rolessss
            Route::get('/createRoles',[RoleAndPermissionController::class,'createRole'])->name('createRole');
            Route::post('/role',[RoleAndPermissionController::class,'roleStore'])->name('creating.roles');
            Route::post('/permission',[RoleAndPermissionController::class,'permissionStore']);
            Route::get('/editRole/{id}', [RoleAndPermissionController::class,'editRole'])->name('editrole');
            Route::put('/updateRole',[RoleAndPermissionController::class,'updateRole']);
            Route::get('Roles/{role_id}/delete',[RoleAndPermissionController::class,'destroyRole']);
           

            // Permission
            Route::get('Permissions/{permission_id}/delete',[RoleAndPermissionController::class,'destroyPermission']);
            Route::get('/createPermission',[RoleAndPermissionController::class,'createPermission'])->name('createPermission');
            Route::post('roles/{role}/permissions',[RoleAndPermissionController::class,'givePermission'])->name('roles.permissions');
            Route::delete('roles/{role}/permissions/{permission}',[RoleAndPermissionController::class,'revokePermission'])->name('roles.permissions.revoke');
            Route::get('/editPermission/{id}', [RoleAndPermissionController::class,'editPermission'])->name('editpermission');
            Route::put('/updatePermission',[RoleAndPermissionController::class,'updatePermission']);


            // Userssssss
            Route::get('/Users',[UserRegisterController::class,'index'])->name('Staff.ManageUsers');
            Route::get('/registerUsers',[UserRegisterController::class,'create'])->name('Staff.RegisterUsers');
            Route::post('/registeredUsers',[UserRegisterController::class,'store'])->name('Staff.registered');
            Route::get('users/{user_id}/delete',[UserRegisterController::class,'destroy']);

            
            
            
            // Parents
            Route::get('/registerParents',[ParentRegisterController::class,'create'])->name('Parents.RegisterParents');
            Route::post('/registeredParents',[ParentRegisterController::class,'store'])->name('Parents.registered');
            Route::get('/Parents',[ParentRegisterController::class,'index'])->name('Parents.ManageParents');
            Route::get('parents/{parent_id}/delete',[ParentRegisterController::class,'destroy']);


            // Studentsssss
            Route::get('/Students',[StudentRegisterController::class,'index'])->name('Students.ManageStudents');
            Route::get('/registerStudents',[StudentRegisterController::class,'create'])->name('Students.RegisterStudents');
            Route::post('/registeredStudents',[StudentRegisterController::class,'store'])->name('Students.registered');
            Route::get('students/{student_id}/delete',[StudentRegisterController::class,'destroy']);





            


});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
