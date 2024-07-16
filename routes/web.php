<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\RequestController;
// admin pages
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;



Route::middleware(['auth:sanctum', 'verified'])->group(function()
{

Route::get('/profile', function () {
  return view('admin.profile');
});
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee_details/{id}', [EmployeeController::class, 'details']);
Route::get('/employee_details', [EmployeeController::class, 'Show_details']);
Route::put('/employee_edit/{employee}', [EmployeeController::class, 'update']);
Route::delete('/employee_delete/{id}', [EmployeeController::class, 'delete']);
Route::get('/employee_delete/{id}', [EmployeeController::class, 'show_delete']);




});


Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project_ct', [ProjectController::class, 'completed']);
Route::get('/project_on', [ProjectController::class, 'ongoing']);
Route::get('/stories', [SuccessStoryController::class, 'index']);
Route::get('/stories_details', [SuccessStoryController::class, 'details']);
Route::get('/stories_details/{id}', [SuccessStoryController::class, 'show_details']);
Route::get('/', [ReportController::class, 'index']);
Route::post('/reports', [ReportController::class, 'show']);
Route::get('/request', [RequestController::class, 'index']);
Route::post('/request', [RequestController::class, 'show']);
Route::get('/staff', [StaffController::class, 'index']);
Route::get('/services/{category}', [ServiceController::class, 'index']);
Route::get('services/{category}', [ServiceController::class, 'show']);
Route::get('/donations/create', [DonationController::class, 'create'])->name('donations.create');
Route::post('/donations/store', [DonationController::class, 'store'])->name('donations.store');
Route::get('/donations/success', [DonationController::class, 'success'])->name('donations.success');
Route::get('/donations/error', [DonationController::class, 'error'])->name('donations.error');
Route::get('/career', [JobsController::class, 'index']);
Route::get('/job-details/{id}', [JobsController::class, 'details']);
Route::get('/job-details', [JobsController::class, 'Show_details']);
Route::get('/project_details/{id}', [ProjectController::class, 'details']);
Route::get('/project_details', [ProjectController::class, 'Show_details']);
Route::post('/jobs', [JobsController::class, 'store']);
Route::get('/jobs', function(){
  return view('jobs');
});

// routes/web.php

Route::get('/about', function(){
  return view('about');
});

Route::get('/approach', function(){
  return view('approach');
});

Route::get('/programs', function(){
  return view('programs');
});


Route::get('/job-details', function(){
  return view('job-details');
});




