<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = "event";
    protected $fillable = [
        "nama_event",
        "waktu_event",
        "thumbnail",
        "deskripsi_event",
        "lokasi",
        "lat",
        "lng",
    ];

    static $rules = [
        'nama_event' => 'required|unique:even',
        'waktu_event' => 'required',
        'thumbnail' => 'required',
        'deskripsi_event' => 'required',
        'lokasi' => 'required',
        'lat' => 'required',
        'lng' => 'required',
    ];

    static $pesan = [
        'nama_event.required' => 'Data tidakboleh kosong !',
        'nama_event.unique' => 'Data sudah ada, silahkan input yang lain !',
        'waktu_event' => 'Data tidakboleh kosong !',
        'thumbnail' => 'Data tidakboleh kosong !',
        'deskripsi_event' => 'Data tidakboleh kosong !',
        'lokasi' => 'Data tidakboleh kosong !',
        'lat' => 'Data tidakboleh kosong !',
        'lng' => 'Data tidakboleh kosong !',
    ];
}
