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

    public function buatdaftarwisata()
    {
        return view('admin.daftarwisata.formwisata');
    }
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

    public function editdaftarwisata($daftarwisatas)
    {
        $daftarwisatas = daftarwisata::where('id', $daftarwisatas)->first();
        return view('admin.daftarwisata.editwisata', compact('daftarwisatas'));
    }

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
    public function deletedaftarwisata($id)
    {
        $daftarwisatas = daftarwisata::findOrFail($id);
        return view('admin.daftarwisata.deletewisata', compact('daftarwisatas'));
    }
    public function destroydaftarwisata($id)
    {
    $daftarwisatas = daftarwisata::findOrFail($id);
    if ($daftarwisatas->gambar && file_exists(public_path('assets/user/img/daftarwisata/' . $daftarwisatas->gambar))) {
        unlink(public_path('assets/user/img/daftarwisata/' . $daftarwisatas->gambar));
    }
    
    $daftarwisatas->delete();
    return redirect()->route('admin')->with('success', "Data {$daftarwisatas->nama_wisata} berhasil dihapus beserta gambarnya.");
    }
    
    // berita

        public function buatberita()
        {
            return view('admin.berita.form');
        }
        public function simpanberita(Request $request)
        {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'judul' => 'required',
                'isi' => 'required',
            ]);
    
            $input = $request->all();
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar')->getClientOriginalExtension();
                $nama_image = 'berita-' . time() . '.' . $image;
                $path = $request->file('gambar')->move(public_path('assets/user/img/berita'), $nama_image);
    
                $input['gambar'] = $nama_image;
            }
            berita::create($input);
            return redirect()->route('admin')->with('success', "Data {$request->judul} berhasil di buat");
        }
    
        public function editberita($beritas)
        {
            $beritas = berita::where('id', $beritas)->first();
            return view('admin.berita.edit', compact('beritas'));
        }
    
        public function updateberita(Request $request, $beritas)
        {
            $request->validate([
                'judul' => 'required',
                'isi' => 'required',
            ]);
    
            $input = $request->all();
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar')->getClientOriginalExtension();
                $nama_image = 'berita-' . time() . '.' . $image;
                $path = $request->file('gambar')->move(public_path('assets/user/img/berita'), $nama_image);
    
                $input['gambar'] = $nama_image;
            }
    
            berita::findOrFail($beritas)->update($input);
            return redirect()->route('admin')->with('success', "Data {$request->judul} berhasil di ubah");
        }
        public function deleteberita($id)
        {
            $beritas = berita::findOrFail($id);
            return view('admin.berita.delete', compact('beritas'));
        }
        public function destroyberita($id)
        {
        $beritas = berita::findOrFail($id);
        if ($beritas->gambar && file_exists(public_path('assets/user/img/berita/' . $beritas->gambar))) {
            unlink(public_path('assets/user/img/berita/' . $beritas->gambar));
        }
        
        $beritas->delete();
        return redirect()->route('admin')->with('success', "Data {$beritas->judul} berhasil dihapus beserta gambarnya.");
        }

    // galeri

    public function buatgaleri()
    {
        return view('admin.galeri.form');
    }
    public function simpangaleri(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'nama_galeri' => 'required',
        ]);

        $input = $request->all();
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar')->getClientOriginalExtension();
            $nama_image = 'galeri-' . time() . '.' . $image;
            $path = $request->file('gambar')->move(public_path('assets/user/img/galeri'), $nama_image);

            $input['gambar'] = $nama_image;
        }
        galeri::create($input);
        return redirect()->route('admin')->with('success', "Data {$request->nama_galeri} berhasil di buat");
    }

    public function editgaleri($galeris)
    {
        $galeris = galeri::where('id', $galeris)->first();
        return view('admin.galeri.edit', compact('galeris'));
    }

    public function updategaleri(Request $request, $galeris)
    {
        $request->validate([
            'nama_galeri' => 'required',
        ]);

        $input = $request->all();
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar')->getClientOriginalExtension();
            $nama_image = 'galeri-' . time() . '.' . $image;
            $path = $request->file('gambar')->move(public_path('assets/user/img/galeri'), $nama_image);

            $input['gambar'] = $nama_image;
        }

        galeri::findOrFail($galeris)->update($input);
        return redirect()->route('admin')->with('success', "Data {$request->nama_galeri} berhasil di ubah");
    }
    public function deletegaleri($id)
    {
        $galeris = galeri::findOrFail($id);
        return view('admin.galeri.delete', compact('galeris'));
    }
    public function destroygaleri($id)
    {
    $galeris = galeri::findOrFail($id);
    if ($galeris->gambar && file_exists(public_path('assets/user/img/galeri/' . $galeris->gambar))) {
        unlink(public_path('assets/user/img/galeri/' . $galeris->gambar));
    }
    
    $galeris->delete();
    return redirect()->route('admin')->with('success', "Data {$galeris->nama_galeri} berhasil dihapus beserta gambarnya.");
    }


}
