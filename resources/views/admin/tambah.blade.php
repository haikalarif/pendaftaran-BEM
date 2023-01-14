@extends('main')

@section('title')
    Tambah Anggota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tambah Anggota</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-6">
            <form action="{{ url('/tambah-anggota') }}" method="POST">
                @csrf
                <div class="from-group" style="margin-bottom: 10px;">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror"
                        value="{{ old('nim') }}" id="nim" name="nim" placeholder="Masukkan NIM Anda..."
                        required>
                </div>
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="from-group" style="margin-bottom: 10px;">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama') }}" id="nama" name="nama" placeholder="Masukkan Nama Anda..."
                        required>
                </div>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="from-group" style="margin-bottom: 10px;">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                        value="{{ old('tgl_lahir') }}" id="tgl_lahir" name="tgl_lahir" required>
                </div>
                @error('tgl_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="from-group" style="margin-bottom: 10px;">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <select name="prodi" class="form-control" required>
                        <option value="" selected hidden>Pilih Program Studi..</option>
                        <option value="Teknik Informatika" {{ old('prodi') == 'Teknik Informatika' ? 'selected' : '' }}>
                            Teknik
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
                <div class="from-group" style="margin-bottom: 10px;">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select name="kelas" class="form-control" required>
                        <option value="" selected hidden>Pilih Kelas..</option>
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
                <div class="from-group" style="margin-bottom: 10px;">
                    <label for="tahun" class="form-label">Tahun Ajaran</label>
                    <input type="text" class="form-control @error('tahun') is-invalid @enderror"
                        value="{{ old('tahun') }}" id="tahun" name="tahun" placeholder="Masukkan Tahun Ajaran..."
                        required>
                </div>
                @error('tahun')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="from-group" style="margin-bottom: 10px;">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" cols="50"></textarea>
                </div>
                @error('tahun')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <div class="from-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/anggota" type="button" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
