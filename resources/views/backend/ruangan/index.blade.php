@extends('backend.layouts.main')
@section('content')

<h1>Data Ruangan</h1>
<p>
     <a href="{{ route('ruangan-dashboard.create') }}" class="btn btn-secondary">
        <i class="fas fa-plus"></i> Tambah data
    </a>
</p>
<table class="table table-bordered mt-3">
    <thead class="table-warning">
        <tr>
            <th>No</th>
            <th>Kode Ruangan</th>
            <th>Nama Ruangan</th>
            <th>Gedung</th>
            <th>Lantai</th>
            <th>Jenis Ruangan</th>
            <th>Kapasitas</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
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
                <td>
                    <a href="{{ route('ruangan-dashboard.edit', $ruangan->id) }}" class="btn btn-success btn-sm" title="Edit">
                        <i class="bi bi-pencil-fill"></i> 
                    </a>
                    <form action="{{ route('ruangan-dashboard.destroy', $ruangan->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-info btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $ruangans->links() }}
@endsection
