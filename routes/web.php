<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ServiceController;
use App\http\controllers\AboutController;
use App\http\controllers\teamController;
use App\http\controllers\ServicesController;
use App\http\controllers\ImageController;
use App\http\controllers\projectController;
use App\http\controllers\profileController;
use App\http\controllers\MonitoringController;
use App\http\controllers\ManagementController;
use App\http\controllers\DetailsController;
use App\http\controllers\eventsController;
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  //  return view('dashboard');
//})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->group(function()
{
    Route::post('/add_image', [ImageController::class, 'store']);
    Route::get('/img_list', [ImageController::class, 'list']);
    Route::get('/delete_img/{id}', [ImageController::class, 'delete']);
    Route::get('/img_edit/{id}', [ImageController::class, 'edit']);
    Route::put('/image_update/{id}', [ImageController::class, 'update']);
    Route::get('/add_image', function(){
        return view('admin.add_image');
    });
    
    Route::get('/delete_service/{id}', [ServiceController::class, 'delete']);
    Route::get('/service_list', [ServiceController::class, 'Service_list']);
    Route::post('/service_add', [ServiceController::class, 'store']);
    Route::get('/service_add', function(){
        return view('admin.service_add');
    });

    Route::get('/event_list', [eventsController::class, 'event_list']);
    Route::get('/team_member', [teamController::class, 'show']);
    Route::get('/team_edit/{id}', [teamController::class, 'edit']);
    Route::put('/team_update/{id}', [teamController::class, 'update']);
    Route::get('/delete/{id}', [teamController::class, 'destroy']);
    Route::post('/member_add', [teamController::class, 'store']);
    Route::get('/member_add', function () {
        return view('admin.member_add');
    });
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/profile', function () {
        return view('admin.profile');
    });
});
/* End of admin routes */
/* start of public routes */
Route::get('/team', [teamController::class, 'index']);
Route::get('/team_profile/{id}', [teamController::class, 'show_profile']);
Route::get('/team_profile', [teamController::class, 'profile']);
Route::get('/gallary', [ImageController::class, 'index']);
Route::get('/', [ServiceController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/projects', [projectController::class, 'index']);
Route::get('/details/{id}', [DetailsController::class, 'show']);
Route::get('/details', [DetailsController::class, 'index']);
Route::get('/monitoring', [MonitoringController::class, 'index']);
Route::get('/management', [ManagementController::class, 'index']);
Route::get('/events', [eventsController::class, 'index']);
Route::get('/event_details/{id}', [eventsController::class, 'show']);
Route::get('/event_details', [eventsController::class, 'event']);
Route::get('/approach', function(){
    return view('approach');
});
Route::get('/partners', function(){
    return view('partners');
});
Route::get('/careers', function(){
    return view('careers');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/firm', function () {
    return view('firm');
});
Route::get('/we_do', function () {
    return view('we_do');
});
