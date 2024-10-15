<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\berita;
use App\Models\daftarwisata;
use App\Models\galeri;

class AdminController extends Controller

{
    public function admin()
    {
        $users = User::all();
        $beritas = berita::all();
        $daftarwisatas = daftarwisata::all();
        $galeris = galeri::all();

        return view('admin.admindashboard', compact('users', 'beritas', 'daftarwisatas', 'galeris'));
    }
    
    
    // daftarwisata

    //mengembalikan view untuk membuat sebuah artikel baru
    public function buatdaftarwisata()
    {
        return view('admin.daftarwisata.formwisata');
    }

    // mennginputkan data sesuai request admin ke dalam tebel artikel dalam database
    public function simpandaftarwisata(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'nama_wisata' => 'required',
            'kategori' => 'required',
        ]);

        $input = $request->all();
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar')->getClientOriginalExtension();
            $nama_image = 'layanan_wisata-' . time() . '.' . $image;
            $path = $request->file('gambar')->move(public_path('assets/user/img/daftarwisata'), $nama_image);

            $input['gambar'] = $nama_image;
        }
        daftarwisata::create($input);
        return redirect()->route('admin')->with('success', "Data {$request->nama_wisata} berhasil di buat");
    }

    // mengembalikan view untuk mengupdate artikel berdasarkan request parameter id dari artikel
    public function editdaftarwisata($daftarwisatas)
    {
        $daftarwisatas = daftarwisata::where('id', $daftarwisatas)->first();
        return view('admin.daftarwisata.editwisata', compact('daftarwisatas'));
    }

    // mengupdate artikel berdasarkan id pada tabel daftarwisata
    public function updatedaftarwisata(Request $request, $daftarwisatas)
    {
        $request->validate([
            'nama_wisata' => 'required',
            'kategori' => 'required',
        ]);

        $input = $request->all();
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar')->getClientOriginalExtension();
            $nama_image = 'layanan_wisata-' . time() . '.' . $image;
            $path = $request->file('gambar')->move(public_path('assets/user/img/daftarwisata'), $nama_image);

            $input['gambar'] = $nama_image;
        }

        daftarwisata::findOrFail($daftarwisatas)->update($input);
        return redirect()->route('admin')->with('success', "Data {$request->nama_wisata} berhasil di ubah");
    }

    // menghapus artikel
    public function deletedaftarwisata($id)
    {
        $daftarwisatas = daftarwisata::findOrFail($id);
        return view('admin.daftarwisata.deletewisata', compact('daftarwisatas'));
    }
    public function destroydaftarwisata($id)
    {
        // Temukan data wisata berdasarkan ID
        $daftarwisatas = daftarwisata::findOrFail($id);
    
        // Cek apakah data memiliki gambar dan file tersebut ada di direktori
        if ($daftarwisatas->gambar && file_exists(public_path('assets/user/img/daftarwisata/' . $daftarwisatas->gambar))) {
            // Hapus file gambar dari direktori
            unlink(public_path('assets/user/img/daftarwisata/' . $daftarwisatas->gambar));
        }
    
        // Hapus data dari database
        $daftarwisatas->delete();
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin')->with('success', "Data {$daftarwisatas->nama_wisata} berhasil dihapus beserta gambarnya.");
    }
    


}
