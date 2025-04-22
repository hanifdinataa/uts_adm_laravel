@extends('backend.layouts.main')

@section('content')
<h1>INPUT MAHASISWA</h1>

<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('mahasiswa-dashboard.store') }}" method="POST">
                @csrf
                
                {{-- NIM --}}
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" name="nim" id="nim" class="form-control @error('nim') is-valid @enderror" value="{{ old('nim')}}" required autofocus>
                    </div>
                </div>


                
                {{-- Nama Lengkap --}}
                <div class="row mb-3">
                    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap') }}" required>
                    </div>
                </div>
                
                {{-- Tempat Lahir --}}
                <div class="row mb-3">
                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid  @enderror" value="{{ old('tempat_lahir') }}" required>
                    </div>
                </div>

                {{-- Tanggal Lahir --}}
                <div class="row mb-3">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir') }}" required>
                    </div>
                </div>
              
                {{-- Email --}}
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror " value="{{ old('email') }}" required>
                    </div>
                </div>
                
                {{-- Prodi --}}
                {{-- <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" id="prodi" name="prodi" class="form-control" required>
                    </div>
                </div> --}}

                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                      <select class="form-select @error('prodi') @enderror" value="{{ old('prodi')}}" name="prodi" id="">
                        <option value="">Pilih Program Studi</option>
                        <option value="MI">MI</option>
                        <option value="TRPL">TRPL</option>
                        <option value="TEKKOM">TEKKOM</option>
                        <option value="ANIMASI">ANIMASI</option>
                      </select>
                    </div>
                </div>

                {{-- Alamat --}}
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('alamat') is-invalid @enderror" {{ old('alamat')}} id="alamat" name="alamat" rows="3" required></textarea>
                    </div>
                </div>
                
                <button type="submit" name="Proses" value="Proses" class="btn btn-primary">Proses</button>
            </form>
        </div>
    </div>
</div>
@endsection
