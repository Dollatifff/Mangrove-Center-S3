<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;
    protected $table = "katalog";
    protected $fillable = [
        "nama_pohon",
        "foto",
        "deskripsi",
    ];

    static $rules = [
        'nama_pohon' => 'required|unique:katalog',
        'foto' => 'required',
        'deskripsi' => 'required',
    ];

    static $pesan = [
        'nama_pohon.required' => 'Data tidak boleh kosong !',
        'nama_pohon.unique' => 'Data sudah ada, silahkan input yang lain !',
        'foto' => 'Data tidakboleh kosong !',
        'deskripsi' => 'Data tidakboleh kosong !',
    ];
}
