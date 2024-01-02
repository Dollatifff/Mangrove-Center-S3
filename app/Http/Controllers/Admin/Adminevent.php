<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File; 

class Adminevent extends Controller
{
    function index(){
        $data['list'] = Event::get();
        return view('admin.event.index', $data);
    }
    function tambah(){
        return view('admin.event.tambah');
    }

    function aksiTambah (Request $request){

       $request->validate(Event::$rules, Event::$pesan);

       $file = $request->file("thumbnail");
       $namaFile = $file->hashName();
       $tempatSimpan = 'app/event/'.$namaFile;


       $event = new Event;
       $event->nama_event = $request->nama_event;
       $event->waktu_event = $request->waktu_event;
       $event->thumbnail = $tempatSimpan;
       $event->deskripsi_event = $request->deskripsi_event;
       $event->lokasi = $request->lokasi;
       $event->lat = $request->lat;
       $event->lng = $request->lng;
       $simpan = $event->save();

       if($simpan == 1){

            $file->storeAs('event/', $namaFile);
            return redirect('admin/event')->with('success', 'Data berhasil disimpan !');
        }
        return back()->with('danger', 'Data gagal disimpan !');
    }
    function detail (Event $event){
        $data['list'] = $event;
        return view("admin.event.detail", $data);
    }
    function edit (Event $event){
        $data['list'] = $event;
        return view("admin.event.edit", $data);
    }
    function akisEdit (Event $event, Request $request){

        $file = $request->file("thumbnail");
       

        if($file == null){

            $event->nama_event = $request->nama_event;
            $event->waktu_event = $request->waktu_event;
            $event->deskripsi_event = $request->deskripsi_event;
            $event->lokasi = $request->lokasi;
            $event->lat = $request->lat;
            $event->lng = $request->lng;
            $simpan = $event->update();

                if($simpan == 1){
                    return redirect('admin/event')->with('success', 'Data berhasil diupdate !');
                }
                return back()->with('danger', 'Data gagal diupdate !');
        }else{
            $hapusFile = File::delete('public/'.$event->thumbnail);

            if($hapusFile){
                $namaFile = $file->hashName();
                $tempatSimpan = 'app/event/'.$namaFile;
    
                $event->nama_event = $request->nama_event;
                $event->waktu_event = $request->waktu_event;
                $event->thumbnail = $tempatSimpan;
                $event->deskripsi_event = $request->deskripsi_event;
                $event->lokasi = $request->lokasi;
                $event->lat = $request->lat;
                $event->lng = $request->lng;
                $simpan = $event->update();
         
                if($simpan == 1){
         
                     $file->storeAs('event/', $namaFile);
                     return redirect('admin/event')->with('success', 'Data berhasil diupdate !');
                 }
                }else{
                    
                    return back()->with('danger', 'Data gagal diupdate !');
                }

           
        }
    }
    function hapus (Event $event){
        $hapusFile = File::delete('public/'.$event->thumbnail);
        if($hapusFile == 1){
            $event->delete();
            return redirect('admin/event')->with('success', 'Data berhasil dihapus !');
        }
        return back()->with('danger', 'Data gagal dihapus !');
    }

   
}
