<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\berita;
use App\Models\daftarwisata;
use App\Models\galeri;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $beritas = berita::all();
        $daftarwisatas = daftarwisata::all();
        $galeris = galeri::all();

        return view('user.index', compact('users', 'beritas', 'daftarwisatas', 'galeris'));
    }

    public function berita($beritas)
    {
            // Mencari artikel dengan id yang sesuai pada database melalui model Article
            $value = berita::findOrFail($beritas);
    
            // Mengembalikan view infoArtikel.blade.php dengan membawa variabel $value
            return view('user.berita', ['berita' => $value]);
    }
}
