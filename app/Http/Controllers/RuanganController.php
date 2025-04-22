<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $data_ruangan = Ruangan::latest()->paginate(10);

        return view('ruangan', ['ruangans' => $data_ruangan]);
    }
}
