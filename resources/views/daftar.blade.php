@extends('main')

@section('title')
    Pendaftaran BEM
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row col-lg-12 mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                {{-- <img src="" alt=""> --}}
                <h1 class="page-header">FORM PENDAFTARAN BEM STMIK BANDUNG</h1>
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

    <form action="{{ url('/pendaftaran') }}" method="POST">
        @csrf
        <div class="from-group">
            <label for="nim" class="form-label"><strong>NIM</strong></label>
            <input type="number" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}"
                id="nim" name="nim" placeholder="Masukkan NIM Anda..." required>
        </div>
        @error('nim')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="nama" class="form-label"><strong>Nama Lengkap</strong></label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}"
                id="nama" name="nama" placeholder="Masukkan Nama Anda...">
        </div>
        @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required>
        </div>
        @error('tgl_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="prodi" class="form-label"><strong>Prodi</strong></label>
            <select name="prodi" class="form-control" required>
                <option value="">Pilih Prodi..</option>
                <option value="Teknik Informatika" {{ old('prodi') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                <option value="Sistem Informasi" {{ old('prodi') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
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
            <select name="kelas" class="form-control" required>
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
            <input type="text" class="form-control @error('tahun') is-invalid @enderror" placeholder="Masukkan Tahun Ajaran..."
                value="{{ old('tahun') }}" id="tahun" name="tahun" required>
        </div>
        @error('tahun')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="alamat" class="form-label"><strong>Alamat</strong></label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" cols="50" placeholder="Kamu Tinggal Dimana?..." required></textarea>
        </div>
        @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <label for="motivasi" class="form-label"><strong>Motivasi</strong></label>
            <textarea class="form-control @error('motivasi') is-invalid @enderror" name="motivasi" cols="50" placeholder="Mengapa Anda ingin masuk BEM?..." required></textarea>
        </div>
        @error('motivasi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        <div class="from-group">
            <button type="submit" class="btn btn-primary">Daftar</button>
            <button type="reset" class="btn btn-danger">Batal</button>
        </div>
    </form>
</div>
@endsection