<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AccountController,
    AdminDashboardController,
    DashboardController
};

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
Route::get('/login', [AccountController::class, 'login'])
    ->middleware('guest')
    ->name('login');
Route::post('/login/auth', [AccountController::class, 'auth'])
    ->name('auth');
Route::post('/logout', [AccountController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['user', 'auth'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('home');
    Route::get('/questionaires', [DashboardController::class, 'questionaires'])
        ->name('questionaires');
    Route::post('/analyze', [DashboardController::class, 'analyze'])
        ->name('analyze');
});

Route::middleware(['admin'])->prefix('admin')->group(function() {
    Route::get('/', [AdminDashboardController::class, 'index'])
        ->name('admin-home');
    Route::get('/rules', [AdminDashboardController::class, 'rules'])
        ->name('rules');
    Route::post('/create-rule', [AdminDashboardController::class, 'createRule'])
        ->name('create-rule');
    Route::post('/remove-rule', [AdminDashboardController::class, 'removeRule'])
        ->name('remove-rule');
    Route::get('/users', [AdminDashboardController::class, 'users'])
        ->name('users');
});