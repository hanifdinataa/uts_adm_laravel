@extends('layouts.main')

@section('content')
    <h1 class="text-center">Data Ruangan</h1>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Ruangan</th>
            <th>Nama Ruangan</th>
            <th>Gedung</th>
            <th>Lantai</th>
            <th>Jenis Ruangan</th>
            <th>Kapasitas</th>
            <th>Keterangan</th>
        </tr>
        
        @foreach ($ruangans as $ruangan)
            <tr>
                <td>{{ $ruangans->firstItem() + $loop->index }}</td>
                <td>{{ $ruangan->kode_ruangan }}</td>
                <td>{{ $ruangan->nama_ruangan }}</td>
                <td>{{ $ruangan->gedung }}</td>
                <td>{{ $ruangan->lantai }}</td>
                <td>{{ $ruangan->jenis_ruangan }}</td>
                <td>{{ $ruangan->kapasitas }}</td>
                <td>{{ $ruangan->keterangan }}</td>
            </tr>
        @endforeach
    </table>

    <!-- Menampilkan pagination -->
    {{ $ruangans->links() }}
@endsection
