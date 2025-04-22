@extends('backend.layouts.main')
@section('content')

    <h1>Tambah Data Dosen</h1>
    <form action="{{ route('dosen-dashboard.store') }}" method="POST">
        @csrf

        {{-- NIK --}}
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="number" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" id="nik" name="nik" required>
            @error('nik')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- NAMA DOSEN --}}
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="nama" name="nama" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- EMAIL --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- NOMOR TELEPON --}}
        <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" id="no_telp" name="no_telp" required>
            @error('no_telp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- PRODI --}}
        <div class="mb-3">
            <label for="prodi_id" class="form-label">Prodi</label>
            <select class="form-control @error('prodi_id') is-invalid @enderror" id="prodi_id" name="prodi_id" required>
                <option value="">Pilih Program Studi</option>
                @foreach ($prodis as $prodi)
                    <option value="{{ $prodi->id }}" {{ old('prodi_id') == $prodi->id ? 'selected' : '' }}>{{ $prodi->nama }}</option>
                @endforeach
            </select>
            @error('prodi_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- ALAMAT --}}
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
