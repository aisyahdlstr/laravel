<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nim','prodi_id','matkul_id','dosen_id','nama_mhs','tmpt_lahir','tgl_lahir','alamat_mhs',
    ];

    // public function prodis(){
    //    return $this->
    // }
    // public function matkul(){
    //     return $this->belongsTo(Matkul::class, 'matkul_id', 'id');
    // }
    // public function dosen(){
    //     return $this->belongsTo(Dosen::class, 'dosen_id', 'id');
    // }
}
