<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Employee\Auth\EmployeeAuthenticatedSessionController;
use App\Http\Controllers\Manager\Auth\ManagerAuthenticatedSessionController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login Routes
// Route::get('/admin-login', [AuthenticatedSessionController::class, 'create'])->name('login');
//Route::post('/admin-login', [AuthenticatedSessionController::class, 'store']);--

// Route::get('/employee-login', [AuthenticatedSessionController::class, 'create'])->name('login');
//Route::post('/employee-login', [AuthenticatedSessionController::class, 'store']);

// Route::get('/manager-login', [AuthenticatedSessionController::class, 'create'])->name('login');
//Route::post('/manager-login', [AuthenticatedSessionController::class, 'store']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
