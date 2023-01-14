@extends('main')

@section('title')
    Anggota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row col-lg-12 mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                {{-- <img src="" alt=""> --}}
                <h1 class="page-header">Data Calon Anggota BEM STMIK Bandung</h1>
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

    <div class="table-responsive lg-12">
        <a href="{{ url('/tambah') }}" class="btn btn-sm btn-info" style="margin-bottom: 10px;">Tambah Anggota Baru</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col" class="text-center">Nim</th>
                    <th scope="col" class="text-center">Nama Mahasiswa</th>
                    <th scope="col" class="text-center">Program Studi</th>
                    <th scope="col" class="text-center">Kelas</th>
                    <th scope="col" class="text-center">Tahun</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td class="text-center">{{ $mhs->prodi }}</td>
                        <td class="text-center">{{ $mhs->kelas }}</td>
                        <td class="text-center">{{ $mhs->tahun }}</td>
                        <td class="text-center">
                            <a href="/anggota/detail/{{ $mhs->id }}" class="btn btn-sm btn-primary"><i
                                    class="fa fa-eye"></i></a>
                            <a href="/anggota/edit/{{ $mhs->id }}" class="btn btn-sm btn-warning"><i
                                    class="fa fa-edit"></i></a>
                            <form class="d-inline" action="/anggota/delete/{{ $mhs->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-danger border-0"
                                    onclick="return confirm('Yakin Mau Hapus?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
