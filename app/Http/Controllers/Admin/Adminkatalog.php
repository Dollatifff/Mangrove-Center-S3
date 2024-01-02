<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Models\Katalog;

class Adminkatalog extends Controller
{
    function index(){
        $data['list'] = Katalog::get();
        return view('admin.katalog.index', $data);
    }

    function tambah(){
        return view('admin.katalog.tambah');
    }

    function aksiTambah(Request $request){

        $request->validate(Katalog::$rules, Katalog::$pesan);

       $file = $request->file("foto");
       $namaFile = $file->hashName();
       $tempatSimpan = 'app/katalog/'.$namaFile;

       $katalog = new Katalog;
       $katalog->nama_pohon = $request->nama_pohon;
       $katalog->foto = $tempatSimpan;
       $katalog->deskripsi_katalog = $request->deskripsi_katalog;
       $simpan = $katalog->save();

       if($simpan){
        
            $file->storeAs('katalog/', $namaFile);
            return redirect('admin/katalog')->with('success', 'Data berhasil disimpan !');
        }
        return back()->with('danger', 'Data gagal disimpan !');
    }
    function detail (Katalog $katalog){
        $data['list'] = $katalog;
        return view("admin.katalog.detail", $data);
    }
    function edit (Katalog $katalog){
        $data['list'] = $katalog;
        return view("admin.katalog.edit", $data);
    }
    function akisEdit (Katalog $katalog, Request $request){

        $file = $request->file("foto");
       

        if($file == null){

            $katalog->nama_pohon = $request->nama_pohon;
            $katalog->deskripsi_katalog = $request->deskripsi_katalog;
            $simpan = $katalog->update();

                if($simpan == 1){
                    return redirect('admin/katalog')->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
        }else{
            $hapusFile = File::delete('public/'.$katalog->foto);

            if($hapusFile){
                $namaFile = $file->hashName();
                $tempatSimpan = 'app/katalog/'.$namaFile;
    
                $katalog->nama_pohon = $request->nama_pohon;
                $katalog->deskripsi_katalog = $request->deskrips_katalogi;
                $katalog->foto = $tempatSimpan;
                $simpan = $katalog->update();
         
                if($simpan == 1){
         
                     $file->storeAs('katalog/', $namaFile);
                     return redirect('admin/katalog')->with('success', 'Data berhasil diupdate !');
                 }
                }else{
                    
                    return back()->with('danger', 'Data gagal diupdate !');
                }

             
        }
    }
    function hapus (Katalog $katalog){
        $hapusFile = File::delete('public/'.$katalog->foto);
        if($hapusFile == 1){
            $katalog->delete();
            return redirect('admin/katalog')->with('success', 'Data berhasil dihapus !');
        }
        return back()->with('danger', 'Data gagal dihapus !');
    }
}
