<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->Anggota = new Anggota();
    }
    public function anggota()
    {
        $mahasiswa = DB::table('anggotas')->get();
        return view('admin.anggota', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        return view('admin.tambah');
    }

    public function tambahAnggota(Request $request)
    {
        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'prodi' => $request->prodi,
            'kelas' => $request->kelas,
            'tahun' => $request->tahun,
            'alamat' => $request->alamat,
            'motivasi' => $request->motivasi,
        ];

        DB::table('anggotas')->insert($data);
        session()->flash('sukses', 'Data Mahasiswa Berhasil Ditambahkan!');
        return redirect('/anggota');
    }

    public function daftar()
    {
        $anggota = DB::table('anggotas')->get();
        return view('daftar', ['agt' => $anggota]);
    }

    public function detail($id)
    {
        $anggota = [
            'anggota' => $this->Anggota->detailAnggota($id),
        ];

        return view('admin.detail', $anggota);
    }

    public function edit($id)
    {
        $anggota = [
            'anggota' => $this->Anggota->detailAnggota($id),
        ];
        return view('admin.edit', $anggota);
    }

    public function update($id)
    {
        Request()->validate([
            'nim' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'prodi' => 'required',
            'kelas' => 'required',
            'tahun' => 'required',
            'alamat' => 'required',
            'motivasi' => '',
        ]);

        $data = [
            'nim' => Request()->nim,
            'nama' => Request()->nama,
            'tgl_lahir' => Request()->tgl_lahir,
            'prodi' => Request()->prodi,
            'kelas' => Request()->kelas,
            'tahun' => Request()->tahun,
            'alamat' => Request()->alamat,
            'motivasi' => Request()->motivasi,
        ];
        $this->Anggota->updatedata($id,$data);
        return redirect()->route('anggota')->with('sukses','Biodata Telah Berhasil Di Update!!!');
    }

    public function delete($id)
    {
        $data = [
            'nim' => Request()->nim,
            'nama' => Request()->nama,
            'tgl_lahir' => Request()->tgl_lahir,
            'prodi' => Request()->prodi,
            'kelas' => Request()->kelas,
            'tahun' => Request()->tahun,
            'alamat' => Request()->alamat,
            'motivasi' => Request()->motivasi,
        ];
        $this->Anggota->deletedata($id,$data);
        return redirect()->route('anggota')->with('sukses','Anggota Telah Berhasil Di Hapus!!!');
    }

    public function pendaftaran(Request $request)
    {
        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'prodi' => $request->prodi,
            'kelas' => $request->kelas,
            'tahun' => $request->tahun,
            'alamat' => $request->alamat,
            'motivasi' => $request->motivasi,
        ];

        DB::table('anggotas')->insert($data);

        session()->flash('sukses', 'Anda Telah Berhasil Daftar');
        return redirect('/daftar');
    }
}
