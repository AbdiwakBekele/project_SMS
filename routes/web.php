<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();
// parent
Route::get('/childgrade', [App\Http\Controllers\HomeController::class, 'childgrade'])->name('childgrade');


// teacher
Route::get('/teacherprofile', [App\Http\Controllers\HomeController::class, 'teacherprofile'])->name('profile');

Route::get('/homeattendance', [App\Http\Controllers\HomeController::class, 'homeattendance'])->name('homeattendance');
Route::get('/mystudent', [App\Http\Controllers\HomeController::class, 'mystudent'])->name('mystudent');
Route::get('/studentgrade', [App\Http\Controllers\HomeController::class, 'studentgrade'])->name('studentgrade');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mygrades', [App\Http\Controllers\HomeController::class, 'grades'])->name('mygrades');
Route::get('/myattendance', [App\Http\Controllers\HomeController::class, 'attendances'])->name('myattendance');

// parent routes
Route::get('/parentlist', [App\Http\Controllers\HomeController::class, 'parentlist']);
Route::get('/registerparent', [App\Http\Controllers\HomeController::class, 'addparent']);
Route::get('/register', [App\Http\Controllers\HomeController::class, 'checkregister']);

// role
Route::get('/addrole', [App\Http\Controllers\HomeController::class, 'addrole']);
Route::get('/permissions', [App\Http\Controllers\HomeController::class, 'permissions']);
Route::get('/roles', [App\Http\Controllers\HomeController::class, 'roles']);
Route::get('/updatepermission', [App\Http\Controllers\HomeController::class, 'updatepermission']);
Route::get('/updaterole', [App\Http\Controllers\HomeController::class, 'updaterole']);

// admin staff
Route::get('/registerstaff', [App\Http\Controllers\HomeController::class, 'registerstaff']);
Route::get('/stafflist', [App\Http\Controllers\HomeController::class, 'stafflist']);

// admin student
Route::get('/Attendancereport', [App\Http\Controllers\HomeController::class, 'Attendancereport']);
Route::get('/registerstudent', [App\Http\Controllers\HomeController::class, 'registerstudent']);
Route::get('/studentlist', [App\Http\Controllers\HomeController::class, 'studentlist']);
Route::get('/studentattendance', [App\Http\Controllers\HomeController::class, 'studentattendance']);
Route::get('/studentprofile', [App\Http\Controllers\HomeController::class, 'studentprofile']);

















