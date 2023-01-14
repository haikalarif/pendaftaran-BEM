<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Anggota extends Model
{
    use HasFactory;

    public function detailAnggota($id)
    {
        return DB::table('anggotas')->where('id', $id)->first();
    }
    public function updatedata($id,$data)
    {
        return DB::table('anggotas')
        ->where('id', $id)
        ->update($data);
    }

    public function deletedata($id)
    {
        DB::table('anggotas')
        ->where('id',$id)
        ->delete();
    }
}
