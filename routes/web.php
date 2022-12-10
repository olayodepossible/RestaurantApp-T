<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Management\CategoryController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('welcome');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// **********Management ***************
Route::get('/management', function () {
    return Inertia::render('Management/Index');
})->middleware(['auth', 'verified'])->name('management');

Route::get('/management/category', [CategoryController::class, 'index'])
->middleware(['auth', 'verified'])->name('category');
    
Route::get('/management/menu', function () {
    return Inertia::render('Management/Menu');
})->middleware(['auth', 'verified'])->name('menu');
    
Route::get('/management/table', function () {
    return Inertia::render('Management/Table');
})->middleware(['auth', 'verified'])->name('table');

Route::get('/management/user', function () {
    return Inertia::render('Management/User');
})->middleware(['auth', 'verified'])->name('user');

Route::get( '/user/profile', [UserProfileController::class, 'show'] )->name('profile');



// **********End ***************


// **********Cashier ***************
Route::get('/cashier', function () {
    return Inertia::render('Category/Index');
})->middleware(['auth', 'verified'])->name('cashier');
// **********End ***************

// **********Report ***************
Route::get('/report', function () {
    return Inertia::render('Report/Index');
})->middleware(['auth', 'verified'])->name('report');
// **********End ***************


    
require __DIR__.'/auth.php';
