@extends('main')

@section('title')
    Edit Anggota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row col-lg-12 mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                {{-- <img src="" alt=""> --}}
                <h1 class="page-header">Edit Biodata Anggota</h1>
            </div>
        </div>
    </div>

    @if (session()->has('sukses'))
        <div class="alert alert-info alert-dismissible" role='alert'>
            <button type="button" class="close" data-disniss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fa fa-check-square-o"></i> Sukses!!!</h5>
            {{ session('sukses') }}
        </div>
    @endif

    <form action="/anggota/update/{{ $anggota->id }}" method="POST">
        @csrf
        <div class="from-group">
            <label for="nim" class="form-label"><strong>NIM</strong></label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" value="{{ $anggota->nim }} "
                id="nim" name="nim" required>
        </div>
        @error('nim')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="nama" class="form-label"><strong>Nama Lengkap</strong></label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ $anggota->nama }} "
                id="nama" name="nama">
        </div>
        @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir"
                name="tgl_lahir" value="{{ $anggota->tgl_lahir }}" required>
        </div>
        @error('tgl_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="prodi" class="form-label"><strong>Prodi</strong></label>
            <select name="prodi" class="form-control" value="{{ $anggota->prodi }}" required>
                <option value="">Pilih Prodi..</option>
                <option value="Teknik Informatika" {{ old('prodi') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik
                    Informatika</option>
                <option value="Sistem Informasi" {{ old('prodi') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem
                    Informasi</option>
            </select>
        </div>
        @error('prodi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="kelas" class="form-label"><strong>Kelas</strong></label>
            <select name="kelas" class="form-control" value="{{ $anggota->kelas }}" required>
                <option value="">Pilih Kelas..</option>
                <option value="Reg-Pagi" {{ old('kelas') == 'Reg-Pagi' ? 'selected' : '' }}>Reg-Pagi</option>
                <option value="Reg-Sore" {{ old('kelas') == 'Reg-Sore' ? 'selected' : '' }}>Reg-Sore</option>
                <option value="Eksekutif" {{ old('kelas') == 'Eksekutif' ? 'selected' : '' }}>Eksekutif</option>
            </select>
        </div>
        @error('kelas')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="tahun" class="form-label"><strong>Tahun Ajaran</strong></label>
            <input type="text" class="form-control @error('tahun') is-invalid @enderror" value="{{ $anggota->tahun }}"
                id="tahun" name="tahun" required>
        </div>
        @error('tahun')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="alamat" class="form-label"><strong>Alamat</strong></label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" cols="50"
                value="{{ $anggota->alamat }}" required></textarea>
        </div>
        @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="motivasi" class="form-label"><strong>Motivasi</strong></label>
            <textarea class="form-control @error('motivasi') is-invalid @enderror" name="motivasi" cols="50"
                value="{{ $anggota->motivasi }}" required></textarea>
        </div>
        @error('motivasi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/anggota" type="button" class="btn btn-danger">Batal</a>
        </div>
    </form>
    </div>
@endsection
