




@extends('layouts.main')
@section('content')

    <h1 class="text-center">Data Mahasiswa</h1>
    <table class="table table-bordered">
        <tr class="table-warning">
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Alamat</th>
        </tr>
        @foreach ($mahasiswas as $mahasiswa)
       {{-- @foreach ($collection as $item)  collection itu ibarat nama data base nya: mahasiswas  item itu nama file nya: mahasiswa --}}
        
        <tr>
            <td>{{ $mahasiswas->firstItem() + $loop->index }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
            <td>{{ $mahasiswa->tempat_lahir }}</td>
            <td>{{ $mahasiswa->tgl_lahir }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->prodi }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
        </tr>
        @endforeach

    </table>
  {{ $mahasiswas->links()  }}
@endsection