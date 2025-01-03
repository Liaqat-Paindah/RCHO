<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RequestController;



    Route::get('/dashboard_view', [JobsController::class, 'view'])->middleware(['auth', 'verified'])->name('dashboard_view');
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dm_jobs', [JobsController::class, 'shows']);
    Route::get('/jobs_trash/{id}', [JobsController::class, 'destroy']);
    Route::get('/jobs_edit/{id}', [JobsController::class, 'edit_shows']);
    Route::post('/jobs_edit', [JobsController::class, 'edit']);
    Route::get('/applicants', [JobsController::class, 'Applicants']);

    Route::get('/job_applicants/{id}', [JobsController::class, 'job_applicants']);
    Route::get('/applicants_details/{id}', [JobsController::class, 'applicants_details']);
    Route::post('/jobs', [JobsController::class, 'store']);
    Route::get('/jobs_desc/{id}', [JobsController::class, 'Job_Details']);
    Route::post('/new_jobs', [JobsController::class, 'saveJobs']);
    Route::get('/new_jobs', [JobsController::class, 'saveRecord']);
    });
    require __DIR__.'/auth.php';
    Route::get('/project', [ProjectController::class, 'index']);
    Route::get('/project_ct', [ProjectController::class, 'completed']);
    Route::get('/project_on', [ProjectController::class, 'ongoing']);
    Route::get('/staff', [StaffController::class, 'index']);
    Route::get('/services', [ServiceController::class, 'index']);
    Route::get('/do', [ServiceController::class, 'do']);
    Route::get('/contact',[ServiceController::class, 'contact']);
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
    Route::get('/', [ReportController::class, 'index']);
    Route::get('/users', [UserController::class, 'users']);
    Route::get('/jobs/{id}', [JobsController::class, 'show_jobs']);
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




