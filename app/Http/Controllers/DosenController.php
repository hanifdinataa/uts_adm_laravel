<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen; 

class DosenController extends Controller
{
    public function index()
    {
        $data_dosen = Dosen::latest()->paginate(10);
        return view('dosen', ['dosens' => $data_dosen]);
    }
}
