<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    
    Artisan::call('optimize:clear'); // Optional, only if needed
});

Route::get('/', [FrontController::class, 'home']);

//##$$$$$$$$$$$$ Work Start Engg. Sajid Ansari 06/02/2025 $$$$$$$$$$$$$$$$$$$$$$##


//@@@@@@@@@@@@@@@@@@@@@@@@@@ turist @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Route::get('/turist-1', [FrontController::class, 'turist_1']);
Route::get('/turist-2', [FrontController::class, 'turist_2']);
// Route::get('/turist-3', [FrontController::class, 'turist_3']);
// Route::get('/turist-4', [FrontController::class, 'turist_4']);
// Route::get('/turist-5', [FrontController::class, 'turist_5']);
// Route::get('/turist-6', [FrontController::class, 'turist_6']);   
// Route::get('/turist-7', [FrontController::class, 'turist_7']);
// Route::get('/turist-8', [FrontController::class, 'turist_8']);
// Route::get('/turist-9', [FrontController::class, 'turist_9']);
// Route::get('/turist-10', [FrontController::class, 'turist_10']);
 Route::get('/tour-single', [FrontController::class, 'tour_single']);
 Route::get('/booking-pages', [FrontController::class, 'booking_pages']);
 Route::get('/destinations', [FrontController::class, 'destinations']);
 Route::get('/contact', [FrontController::class, 'contact']);
 Route::get('/register', [FrontController::class, 'register']);
 Route::get('/login', [FrontController::class, 'login']);
 Route::get('/db-profile', [FrontController::class, 'db_profile']);
 Route::get('/db-messages', [FrontController::class, 'db_messages']);
 Route::get('/db-add-tour', [FrontController::class, 'db_add_tour']);
 Route::get('/db-favorites', [FrontController::class, 'db_favorites']);
 Route::get('/db-listing', [FrontController::class, 'db_listing']);
 Route::get('/db-booking', [FrontController::class, 'db_booking']);
 Route::get('/db-main', [FrontController::class, 'db_main']);
 

 //@@@@@@@@@@@@@@@@@@@@@@@@@@ Admin @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 Route::get('admin',[AuthController::class,'login'])->name('admin.login');
 Route::post('admin-login',[AuthController::class,'admin_login'])->name('admin-login');


 Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('admin');
 
 //c1Q|///F1# 

