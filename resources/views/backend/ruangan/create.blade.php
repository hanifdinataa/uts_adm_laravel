@extends('backend.layouts.main')
@section('content')

    <h1>tambahh data ruangan</h1>
    <form action="{{ route('ruangan-dashboard.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="kode_ruangan" class="form-label">Kode Ruangan</label>
            <input type="text" class="form-control @error('kode_ruangan') is-invalid @enderror" value="{{ old('kode_ruangan') }}" id="kode_ruangan" name="kode_ruangan" maxlength="20" required>
            @error('kode_ruangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
            <input type="text" class="form-control @error('nama_ruangan') is-invalid @enderror" value="{{ old('nama_ruangan') }}" id="nama_ruangan" name="nama_ruangan" maxlength="100" required>
            @error('nama_ruangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="gedung" class="form-label">Gedung</label>
            <input type="text" class="form-control @error('gedung') is-invalid @enderror" value="{{ old('gedung') }}" id="gedung" name="gedung" maxlength="50" required>
            @error('gedung')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="lantai" class="form-label">Lantai</label>
            <input type="number" class="form-control @error('lantai') is-invalid @enderror" value="{{ old('lantai') }}" id="lantai" name="lantai" required>
            @error('lantai')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jenis_ruangan" class="form-label">Jenis Ruangan</label>
            <input type="text" class="form-control @error('jenis_ruangan') is-invalid @enderror" value="{{ old('jenis_ruangan') }}" id="jenis_ruangan" name="jenis_ruangan" maxlength="50" required>
            @error('jenis_ruangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kapasitas" class="form-label">Kapasitas</label>
            <input type="number" class="form-control @error('kapasitas') is-invalid @enderror" value="{{ old('kapasitas') }}" id="kapasitas" name="kapasitas" required>
            @error('kapasitas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
            @error('keterangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
