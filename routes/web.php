<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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
Route::get('/', action: [UserController::class, 'index'])->name('Index');


// Route::middleware(['auth', 'multiple-login:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    
// Route::get('/adminjajar/wisata', function () {return view('admin/formwisata');});
// });
// Route::middleware('admin')->group(function () {
//     Route::get('/adminjajar/wisata', function () {return view('admin/formwisata');});

Route::get('/admin', action: [AdminController::class, 'admin'])->name('admin');

// Layanan Wisata
Route::get('/admin/buatwisata', [AdminController::class, 'buatdaftarwisata'])->name('BuatDaftarWisata');
Route::post('/admin/buatwisata', [AdminController::class, 'simpandaftarwisata'])->name('SimpanDaftarWisata');
Route::get('/admin/editdaftarwisata/{daftarwisata}', [AdminController::class, 'editdaftarwisata'])->name('EditDaftarWisata');
Route::patch('/admin/daftarwisata/{daftarwisata}', [AdminController::class, 'updatedaftarwisata'])->name('UpdateDaftarWisata');
Route::get('/admin/{daftarwisata}/deletedaftarwisata', [AdminController::class, 'deletedaftarwisata'])->name('DeleteDaftarWisata');
Route::delete('/admin/{daftarwisata}/deletedaftarwisata/hapus', [AdminController::class, 'destroydaftarwisata'])->name('DestroyDaftarWisata');

// Berita
Route::get('/admin/buatberita', [AdminController::class, 'buatberita'])->name('BuatBerita');
Route::post('/admin/buatberita', [AdminController::class, 'simpanberita'])->name('SimpanBerita');
Route::get('/admin/editberita/{berita}', [AdminController::class, 'editberita'])->name('EditBerita');
Route::patch('/admin/berita/{berita}', [AdminController::class, 'updateberita'])->name('UpdateBerita');
Route::get('/admin/{berita}/deleteberita', [AdminController::class, 'deleteberita'])->name('DeleteBerita');
Route::delete('/admin/{berita}/deleteberita/hapus', [AdminController::class, 'destroyberita'])->name('DestroyBerita');

// Galeri
Route::get('/admin/buatgaleri', [AdminController::class, 'buatgaleri'])->name('BuatGaleri');
Route::post('/admin/buatgaleri', [AdminController::class, 'simpangaleri'])->name('SimpanGaleri');
Route::get('/admin/editgaleri/{galeri}', [AdminController::class, 'editgaleri'])->name('EditGaleri');
Route::patch('/admin/galeri/{galeri}', [AdminController::class, 'updategaleri'])->name('UpdateGaleri');
Route::get('/admin/{galeri}/deletegaleri', [AdminController::class, 'deletegaleri'])->name('DeleteGaleri');
Route::delete('/admin/{galeri}/deletegaleri/hapus', [AdminController::class, 'destroygaleri'])->name('DestroyGaleri');