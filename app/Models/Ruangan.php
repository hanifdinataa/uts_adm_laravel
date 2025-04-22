<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $table = 'ruangans';

    protected $fillable = [
        'kode_ruangan',
        'nama_ruangan',
        'gedung',
        'lantai',
        'jenis_ruangan',
        'kapasitas',
        'keterangan',
    ];

    public $timestamps = true;
}