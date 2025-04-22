@extends('backend.layouts.main')
@section('content')

    <h1>Data Mahasiswa</h1>
    <p>Klik <a href="{{ route('mahasiswa-dashboard.create') }}" class="btn btn-primary ">
        <i class="fas fa-plus"></i> Disini
    </a> Untuk Menambahkan data Mahasiswa</p>
    <table class="table table-bordered mt-3">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswas->firstItem() + $loop->index }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama_lengkap }}</td>
                    <td>{{ $mahasiswa->tempat_lahir }}</td>
                    <td>{{ $mahasiswa->tgl_lahir }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->prodi }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                    <td>
                        {{-- Tombol Edit --}}

                        {{-- Pake Teks --}}
                        {{-- <a href="{{ route('mahasiswa-dashboard.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a> --}}


                        {{-- Gapake Teks (hanya Icons) --}}
                        <a href="{{ route('mahasiswa-dashboard.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm"
                            title="Edit">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        {{-- <a href="{{route('mahasiswa-dashboard.destroy', $mahasiswa->id)}}" class="btn btn ">xx</a> --}}


                        {{-- Tombol Hapus --}}
                        {{-- Pake Teks --}}
                        {{-- <form action="{{ route('mahasiswa-dashboard.destroy', $mahasiswa->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form> --}}

                        {{-- Gapake Teks (Hanya Icons) --}}
                        <form action="{{ route('mahasiswa-dashboard.destroy', $mahasiswa->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $mahasiswas->links() }}
@endsection
