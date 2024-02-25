<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactUsSubmissionController;
use App\Http\Controllers\CustomerReviewController;
use App\Http\Controllers\NewsLetterSubscriptionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Models\Booking;

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

Route::get('/', [PageController::class, 'viewHomePage'])->name('view.home.page');


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [UserController::class, 'viewDashboard'])->name('view.dashboard');

    Route::get('/users/view-users', [UserController::class, 'viewUsers'])->name('viewUsers');
    Route::get('/users/get-users', [UserController::class, 'getUsers'])->name('getUsers');
    Route::post('/users/detete-users',[UserController::class, 'deleteUser'])->name('deleteUser');
    Route::post('/users/disable-enable-user',[UserController::class, 'disableEnableUser'])->name('disableEnableUser');
    Route::post('/users/add-new-admin',[UserController::class, 'addNewAdmin'])->name('addNewAdmin');
    Route::post('/users/change-password',[UserController::class, 'changePassword'])->name('changePassword');
    
    
    

   

    Route::get('generate-sitemap',[PageController::class, 'generateSitemap'])->name('generate.sitemap');



    Route::middleware('auth')->prefix('profile')->group(function () {
        Route::get('/my-profile', [ProfileController::class, 'viewMyProfile'])->name('viewMyProfile');
        Route::post('/my-profile', [ProfileController::class, 'changeProfileInfo']);
        Route::get('/change-password', [ProfileController::class, 'viewChangePassword'])->name('viewChangePassword');
        Route::post('/change-password', [ProfileController::class, 'changePassword']);
        Route::post('/change-profile-image', [ProfileController::class, 'changeProfileImage'])->name('changeProfileImage');
    
    });
});


require __DIR__.'/auth.php';
