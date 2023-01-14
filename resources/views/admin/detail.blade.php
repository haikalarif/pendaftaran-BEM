@extends('main')

@section('title')
    Detail Anggota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row col-lg-12 mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                {{-- <img src="" alt=""> --}}
                <h1 class="page-header">Detail Biodata</h1>
            </div>
        </div>
    </div>

    <div class="table-responsive col-lg-8">
        <a href="/anggota" class="btn btn-sm btn-warning" style="margin-bottom: 10px;"><i class="fa fa-arrow-left"></i>
            Kembali</a>
        <table class="table table-striped table-sm col-lg-8">
            <tr>
                <th width="150px">NIM</th>
                <th width="10px">:</th>
                <th>{{ $anggota->nim }}</th>
            </tr>
            <tr>
                <th width="150px">Nama Lengkap</th>
                <th width="10px">:</th>
                <th>{{ $anggota->nama }}</th>
            </tr>
            <tr>
                <th width="150px">Tanggal Lahir</th>
                <th width="10px">:</th>
                <th>{{ $anggota->tgl_lahir }}</th>
            </tr>
            <tr>
                <th width="150px">Prodi</th>
                <th width="10px">:</th>
                <th>{{ $anggota->prodi }}</th>
            </tr>
            <tr>
                <th width="150px">Kelas</th>
                <th width="10px">:</th>
                <th>{{ $anggota->kelas }}</th>
            </tr>
            <tr>
                <th width="150px">Tahun Ajaran</th>
                <th width="10px">:</th>
                <th>{{ $anggota->tahun }}</th>
            </tr>
            <tr>
                <th width="150px">Alamat</th>
                <th width="10px">:</th>
                <th>{{ $anggota->alamat }}</th>
            </tr>
            <tr>
                <th width="150px">Motivasi</th>
                <th width="10px">:</th>
                <th>{{ $anggota->motivasi }}</th>
            </tr>
        </table>
    </div>
@endsection
