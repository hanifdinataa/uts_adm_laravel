<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaDashboardController extends Controller

{
    /**
     * Display a listing of the resource.
     */

    public function index()   /// menampilkan halaman list
    {
        $data_mahasiswa = Mahasiswa::latest()->paginate(10);
        return view('backend.mahasiswa.index', ['mahasiswas' => $data_mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()  /// untuk membuat(create) data dari yang kita input
    {
        return view('backend.mahasiswa.create');
    }


    public function store(Request $request)   /// untuk menyimpan data yang di input
    {
        $validatedData = $request->validate([
            'nim' => 'required|unique:mahasiswas,nim|max:10',
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'prodi' => 'required|string|max:100',
            'email' => 'required|email|unique:mahasiswas,email',
            'alamat' => 'required|string',
        ]);

        Mahasiswa::create($validatedData);
        return redirect()->route('mahasiswa-dashboard.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $mahasiswa = Mahasiswa::findOrFail($id);
        // return view('mahasiswa-dashboard.edit', compact('mahasiswa'));

        $data = Mahasiswa::find($id);

        if (!$data) {
            return redirect()->route('mahasiswa-dashboard.index')->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        return view('backend.mahasiswa.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'nim' => 'required|max:10|unique:mahasiswas,nim,' . $id,
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'prodi' => 'required|string|max:100',
            'email' => 'required|email|unique:mahasiswas,email,' . $id,
            'alamat' => 'required|string',
        ]);


        $mahasiswa = Mahasiswa::find($id);  /// untuk mencari  data berdasarkan ID
        if (!$mahasiswa) {
            return redirect()->route('mahasiswa-dashboard.index')->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        ///update mahasiswa
        $mahasiswa->update($validatedData);
        return redirect()->route('mahasiswa-dashboard.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Jika data tidak ditemukan, kembalikan ke halaman awal dengan pesan error
        if (!$mahasiswa) {
            return redirect()->route('mahasiswa-dashboard.index')->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        // Hapus data
        $mahasiswa->delete();

        // Redirect ke halaman awal   dengan pesan sukses
        return redirect()->route('mahasiswa-dashboard.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
