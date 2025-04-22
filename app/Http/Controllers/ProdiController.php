<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi; 

class ProdiController extends Controller
{
    public function index()
    {
        $data_prodi = Prodi::latest()->paginate(10);
        return view('prodi', ['prodis' => $data_prodi]);
    }
}
