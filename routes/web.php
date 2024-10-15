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


// Route::middleware(['auth', 'multiple-login:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    
// Route::get('/adminjajar/wisata', function () {return view('admin/formwisata');});
// });
// Route::middleware('admin')->group(function () {
//     Route::get('/adminjajar/wisata', function () {return view('admin/formwisata');});
Route::get('/admin', action: [AdminController::class, 'admin'])->name('admin');
Route::get('/admin/buatwisata', [AdminController::class, 'buatdaftarwisata'])->name('BuatDaftarWisata');
Route::post('/admin/buatwisata', [AdminController::class, 'simpandaftarwisata'])->name('SimpanDaftarWisata');
Route::get('/admin/editdaftarwisata/{daftarwisata}', [AdminController::class, 'editdaftarwisata'])->name('EditDaftarWisata');
Route::patch('/admin/daftarwisata/{daftarwisata}', [AdminController::class, 'updatedaftarwisata'])->name('UpdateDaftarWisata');
Route::get('/admin/{daftarwisata}/deletedaftarwisata', [AdminController::class, 'deletedaftarwisata'])->name('DeleteDaftarWisata');
Route::delete('/admin/{daftarwisata}/deletedaftarwisata/hapus', [AdminController::class, 'destroydaftarwisata'])->name('DestroyDaftarWisata');
