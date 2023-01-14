@extends('main')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
    </div>

    <div class="card-body text-center">
        <h1 class="card-title">Selamat Datang, {{ auth()->user()->name }}</h1>
    </div>
    <img src="{{ asset('temp') }}/img/bem.png" style="display:block; margin:auto;" class="img-circle" alt="Logo"
        width="200px" height="200px">
    <div class="card">

        @can('guest')
            <div class="card-body text-center">
                <h3 class="card-text">Ayo buruan gabung bersama BEM STMIK Bandung!</h3>
                <a href="/daftar" class="btn btn-primary">Daftar Sekarang</a><br>
            </div>
        @endcan
        <div class="card-title">
            <h1> BEM STMIK BANDUNG</h1>
            <p class="card-text">Badan eksekutif mahasiswa (disingkat BEM) adalah organisasi mahasiswa intra kampus
                yang
                merupakan lembaga eksekutif di tingkat pendidikan tinggi yang dipimpin oleh seorang Presiden Mahasiswa atau
                Ketua BEM. Dalam melaksanakan program-programnya, umumnya BEM memiliki beberapa kementerian dan departemen
                atau bidang.</p>
            <p class="card-text">Badan Eksekutif Mahasiswa (BEM) adalah badan organisasi tertinggi dalam sebuah
                Universitas, Institut, Politeknik, ataupun Sekolah Tinggi dan memiliki landasan hukum berdasarkan KEPMEN No.
                155. Keberadaan BEM disebuah Perguruan Tinggi sangatlah fungsional, baik untuk pihak kampus sendiri ataupun
                untuk UKM berserta civitas akademika Perguruan Tinggi tersebut.</p>
            <p class="card-text">Berikut ini adalah fungsi dari keberadaan BEM tingkat Universitas. Dan fungsi ini akan
                senantiasa selalu dipegang teguh oleh BEM.
            <p class="card-text"> 1. Fungsi Aspiratif. Berperan sebagai penampung dan penyalur aspirasi atau keinginan
                Mahasiswa.</p>

            <p class="card-text"> 2. Fungsi Advokasi. Jika terdapat Mahasiswa yang mempunyai permasalahan kesulitan
                membayar SPP/ penangguhan,
                permasalahan akademik, transparansi pendanaan kemahasiswaan dan peran lembaga dalam memperjuangkan hak-hak
                Mahasiswa.</p>

            <p class="card-text"> 3. Fungsi Koordinasi. Menjadi tempat berkoordinasi dan komunikasi berbagai
                kepentingan UKM dan jembatan
                antara aspirasi Mahasiswa dengan pihak REKTORAT.</p>

            <p class="card-text"> 4. Fungsi Katalisator, Inisiator, dan Fasilitator bagi seluruh Mahasiswa.</p>
        </div>

    </div>
@endsection
