<?php

use App\Http\Controllers\AdminEvent\DashboardController;
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
    return view('welcome');
});

Auth::routes();

Route::prefix('admin-event')->name('admin-event.')->middleware(['auth', 'role:admin-event'])->group(
    function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    }
);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
