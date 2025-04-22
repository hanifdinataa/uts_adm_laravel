@extends('backend.layouts.main')

@section('content')
<h1>Edit Data Ruangan</h1>

<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('ruangan-dashboard.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="kode_ruangan" class="col-sm-2 col-form-label">Kode Ruangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_ruangan" id="kode_ruangan" class="form-control" value="{{ $data->kode_ruangan }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama_ruangan" class="col-sm-2 col-form-label">Nama Ruangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_ruangan" id="nama_ruangan" class="form-control" value="{{ $data->nama_ruangan }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gedung" class="col-sm-2 col-form-label">Gedung</label>
                    <div class="col-sm-10">
                        <input type="text" name="gedung" id="gedung" class="form-control" value="{{ $data->gedung }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="lantai" class="col-sm-2 col-form-label">Lantai</label>
                    <div class="col-sm-10">
                        <input type="number" name="lantai" id="lantai" class="form-control" value="{{ $data->lantai }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jenis_ruangan" class="col-sm-2 col-form-label">Jenis Ruangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="jenis_ruangan" id="jenis_ruangan" class="form-control" value="{{ $data->jenis_ruangan }}" required>
                    </div>
                </div>

               
                <div class="row mb-3">
                    <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                    <div class="col-sm-10">
                        <input type="number" name="kapasitas" id="kapasitas" class="form-control" value="{{ $data->kapasitas }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3">{{ $data->keterangan }}</textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
