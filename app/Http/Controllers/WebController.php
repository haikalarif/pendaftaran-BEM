<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function daftar()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('daftar', ['mhs' => $mahasiswa]);
    }

    public function pendaftaran(Request $req)
    {
        $nim = $req->nim;
        $nama = $req->nama;
        $prodi = $req->prodi;
        $kelas = $req->kelas;
        $tahun = $req->tahun;
        $motivasi = $req->motivasi;

        DB::table('anggota')->insert(['nim' => $nim, 'nama' => $nama, 'prodi' => $prodi, 'kelas' => $kelas, 'tahun' => $tahun, 'motivasi' => $motivasi,]);

        session()->flash('sukses', 'Anda Telah Berhasil Daftar');
        return redirect('/daftar');
    }
}
