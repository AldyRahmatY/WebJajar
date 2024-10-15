<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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
    return view('user/index');
});

Route::get('/adminjajar', function () {
    return view('admin/admindashboard');
});


Route::middleware(['auth', 'multiple-login:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    
Route::get('/adminjajar/wisata', function () {return view('admin/formwisata');});
});
Route::middleware('admin')->group(function () {
    Route::get('/adminjajar/wisata', function () {return view('admin/formwisata');});

    
});