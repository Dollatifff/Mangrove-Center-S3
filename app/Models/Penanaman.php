<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penanaman extends Model
{
    use HasFactory;
    protected $table = "penanaman";
    protected $fillable = [
        "lokasi",
        "sampel",
        "tanggal_penanaman",
        "jenis_mangrove",
        "jenis_tanah",
        "masa_tumbuh",
        "umur_tanaman",
        "deskripsi",
        "status_penanaman",
        "foto",
    ];

    static $rules = [
        'lokasi' => 'required|unique:penanaman',
        'sampel' => 'required',
        'tanggal_penanaman' => 'required',
        'jenis_mangrove' => 'required',
        'jenis_tanah' => 'required',
        'masa_tumbuh' => 'required',
        'umur_tanaman' => 'required',
        'deskripsi' => 'required',
        'status_penanaman' => 'required',
        'foto' => 'required',   
    ];

    static $pesan = [
        'lokasi' => 'Data tidakboleh kosong !',
        'sampel.unique' => 'Data sudah ada, silahkan input yang lain !',
        'tanggal_penanaman' => 'Data tidakboleh kosong !',
        'jenis_mangrove' => 'Data tidakboleh kosong !',
        'jenis_tanah' => 'Data tidakboleh kosong !',
        'masa_tumbuh' => 'Data tidakboleh kosong !',
        'umur_tanaman' => 'Data tidakboleh kosong !',
        'deskripsi' => 'Data tidakboleh kosong !',
        'status_penanaman' => 'Data tidakboleh kosong !',
        'foto' => 'Data tidakboleh kosong !',    
    ];
}
