<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_ruangan = Ruangan::latest()->paginate(10);
        return view('backend.ruangan.index', ['ruangans' => $data_ruangan]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.ruangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_ruangan' => 'required|unique:ruangans,kode_ruangan|max:10',
            'nama_ruangan' => 'required|string|max:255',
            'gedung' => 'required|string|max:255',
            'lantai' => 'required|integer',
            'jenis_ruangan' => 'required|string|max:100',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string',
        ]);

        Ruangan::create($validatedData);

        return redirect()->route('ruangan-dashboard.index')->with('success', 'Data ruangan berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Ruangan::find($id);

        if (!$data) {
            return redirect()->route('ruangan-dashboard.index')->with('error', 'Data ruangan tidak ditemukan.');
        }

        return view('backend.ruangan.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode_ruangan' => 'required|max:10|unique:ruangans,kode_ruangan,' . $id,
            'nama_ruangan' => 'required|string|max:255',
            'gedung' => 'required|string|max:255',
            'lantai' => 'required|integer',
            'jenis_ruangan' => 'required|string|max:100',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string',
        ]);

        $ruangan = Ruangan::find($id);
        if (!$ruangan) {
            return redirect()->route('ruangan-dashboard.index')->with('error', 'Data ruangan tidak ditemukan.');
        }

        $ruangan->update($validatedData);

        return redirect()->route('ruangan-dashboard.index')->with('success', 'Data ruangan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        $ruangan->delete();

        return redirect()->route('ruangan-dashboard.index')->with('success', 'Data ruangan berhasil dihapus.');
    }
}
