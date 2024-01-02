<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Models\Penanaman;

class Adminpenanaman extends Controller
{
    function index(){
        $data['list'] = Penanaman::get();
        return view('admin.penanaman.index', $data);
    }

    function tambah(){
        return view('admin.penanaman.tambah');
    }

    function aksiTambah(Request $request){
        $request->validate(Penanaman::$rules, Penanaman::$pesan);

       $file = $request->file("foto");
       $namaFile = $file->hashName();
       $tempatSimpan = 'app/penanaman/'.$namaFile;

       $penanaman = new Penanaman;
       $penanaman->lokasi = $request->lokasi;
       $penanaman->sampel = $request->sampel;
       $penanaman->tanggal_penanaman = $tempatSimpan;
       $penanaman->jenis_mangrove = $request->jenis_mangrove;
       $penanaman->jenis_tanah = $request->jenis_tanah;
       $penanaman->masa_tumbuh = $request->masa_tumbuh;
       $penanaman->umur_tanaman = $request->umur_tanaman;
       $penanaman->deskripsi = $request->deskripsi;
       $penanaman->status_penanaman = $request->status_penanaman;
       $penanaman->foto = $request->foto;
       $simpan = $penanaman->save();
       
       if($simpan){
        
            $file->storeAs('penanaman/', $namaFile);
            return redirect('admin/penananman')->with('success', 'Data berhasil disimpan !');
        }
        return back()->with('danger', 'Data gagal disimpan !');
    }
    function detail (Penanaman $Penanaman){
        $data['list'] = $Penanaman;
        return view("admin.penanaman.detail", $data);
    }
    function edit (Penanaman $penanaman){
        $data['list'] = $penanaman;
        return view("admin.penanaman.edit", $data);
    }
    function aksiEdit (Penanaman $penanaman, Request $request){

        $file = $request->file("foto");
       

        if($file == null){
        $file = $request->file("foto");
       $namaFile = $file->hashName();
       $tempatSimpan = 'app/penanaman/'.$namaFile;

            $penanaman->lokasi = $request->lokasi;
            $penanaman->sampel = $request->sampel;
            $penanaman->tanggal_penanaman = $tempatSimpan;
            $penanaman->jenis_mangrove = $request->jenis_mangrove;
            $penanaman->jenis_tanah = $request->jenis_tanah;
            $penanaman->masa_tumbuh = $request->masa_tumbuh;
            $penanaman->umur_tanaman = $request->umur_tanaman;
            $penanaman->deskripsi = $request->deskripsi;
            $penanaman->status_penanaman = $request->status_penanaman;
            $penanaman->foto = $request->foto;
            $simpan = $penanaman->update();

                if($simpan == 1){
                    return redirect('admin/penanaman')->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
        }else{
            $hapusFile = File::delete('public/'.$penanaman->foto);

            if($hapusFile){
                $namaFile = $file->hashName();
                $tempatSimpan = 'app/penanaman/'.$namaFile;
    
                $penanaman->lokasi = $request->lokasi;
                $penanaman->sampel = $request->sampel;
                $penanaman->tanggal_penanaman = $tempatSimpan;
                $penanaman->jenis_mangrove = $request->jenis_mangrove;
                $penanaman->jenis_tanah = $request->jenis_tanah;
                $penanaman->masa_tumbuh = $request->masa_tumbuh;
                $penanaman->umur_tanaman = $request->umur_tanaman;
                $penanaman->deskripsi = $request->deskripsi;
                $penanaman->status_penanaman = $request->status_penanaman;
                $penanaman->foto = $request->foto;
                $penanaman->lat = $request->lat;
                $penanaman->lng = $request->lng;
                $simpan = $penanaman->update();
         
                if($simpan == 1){
         
                     $file->storeAs('penanaman/', $namaFile);
                     return redirect('admin/penanaman')->with('success', 'Data berhasil diupdate !');
                 }
                }else{
                    
                    return back()->with('danger', 'Data gagal diupdate !');
                }

           
        }
    }
    function hapus (Penanaman $penanaman){
        $hapusFile = File::delete('public/'.$penanaman->foto);
        if($hapusFile == 1){
            $penanaman->delete();
            return redirect('admin/penanaman')->with('success', 'Data berhasil dihapus !');
        }
        return back()->with('danger', 'Data gagal dihapus !');
    }
}
