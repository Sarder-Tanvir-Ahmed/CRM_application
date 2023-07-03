<?php

use App\Http\Controllers\AdminRegisteredUserController;
use App\Http\Controllers\AdminAuthenticatedSessionController;
use App\Http\Controllers\EmployeeRegisteredUserController;
use App\Http\Controllers\EmployeeAuthenticatedSessionController;
use App\Http\Controllers\ManagerRegisteredUserController;
use App\Http\Controllers\ManagerAuthenticatedSessionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;





Route::middleware('guest')->group(function () {
    //Users routes
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);



    //Admin routes
    Route::get('admin-register', [AdminRegisteredUserController::class, 'create'])
                ->name('register.admin');

    Route::post('admin-register', [AdminRegisteredUserController::class, 'store']);

    Route::get('admin-login', [AdminAuthenticatedSessionController::class, 'create'])
                ->name('login.admin');

    Route::post('admin-login', [AdminAuthenticatedSessionController::class, 'store']);

    //Employee routes
    Route::get('employee-register', [EmployeeRegisteredUserController::class, 'create'])
                ->name('register.employee');

    Route::post('employee-register', [EmployeeRegisteredUserController::class, 'store']);

    Route::get('employee-login', [EmployeeAuthenticatedSessionController::class, 'create'])
                ->name('login.employee');

    Route::post('employee-login', [EmployeeAuthenticatedSessionController::class, 'store']);


    //Manager routes
    Route::get('manager-register', [ManagerRegisteredUserController::class, 'create'])
                ->name('register.manager');

    Route::post('manager-register', [ManagerRegisteredUserController::class, 'store']);

    Route::get('manager-login', [ManagerAuthenticatedSessionController::class, 'create'])
                ->name('login.manager');

    Route::post('manager-login', [ManagerAuthenticatedSessionController::class, 'store']);


    //Others
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::post('admin-logout', [AdminAuthenticatedSessionController::class, 'destroy'])
                ->name('logout.admin');

    Route::post('employee-logout', [EmployeeAuthenticatedSessionController::class, 'destroy'])
                ->name('logout.employee');

    Route::post('manager-logout', [ManagerAuthenticatedSessionController::class, 'destroy'])
                ->name('logout.manager');
});
