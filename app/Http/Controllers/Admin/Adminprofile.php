<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File; 
use App\Models\Admin;

class Adminprofile extends Controller
{
    function profile(){
        $data['list'] = Auth::guard('admin')->user();
        return view("admin.profile.index", $data);
    }
    function editprofile(Request $request, Admin $admin){
        $file = $request->file("foto");
        $password = $request->password;
        
        if($file != null){
            $hapusFile = File::delete('public/'.$admin->foto);
            if($hapusFile){
                $namaFile = $file->hashName();
                $tempatSimpan = 'app/admin/'.$namaFile;
                $file->storeAs('admin/', $namaFile);
                if($password != null){
                    $admin->nama = $request->nama;
                    $admin->email = $request->email;
                    $admin->password = bcrypt($request->password);
                    $admin->foto = $tempatSimpan;
                    $update = $admin->update();
                    if($update){
                        return back()->with('success', 'Profile berhasil diupdate !');
                    }else{
                        return back()->with('danger', 'Profile gagal diupdate !');
                    }
                }else{
                    $admin->nama = $request->nama;
                    $admin->email = $request->email;
                    $admin->foto = $tempatSimpan;
                    $update = $admin->update();
                    if($update){
                        return back()->with('success', 'Profile berhasil diupdate !');
                    }else{
                        return back()->with('danger', 'Profile gagal diupdate !');
                    }
                }
            }else{
                return back()->with('danger', 'Gagal menghapus file foto lama');
            }
        }else{
            if($password != null){
                $admin->nama = $request->nama;
                $admin->email = $request->email;
                $admin->password = bcrypt($request->password);
                $update = $admin->update();
                if($update){
                    return back()->with('success', 'Profile berhasil diupdate !');
                }else{
                    return back()->with('danger', 'Profile gagal diupdate !');
                }
            }else{
                $admin->nama = $request->nama;
                $admin->email = $request->email;
                $update = $admin->update();
                if($update){
                    return back()->with('success', 'Profile berhasil diupdate !');
                }else{
                    return back()->with('danger', 'Profile gagal diupdate !');
                }
            }
        }
    }

    function logout(){
        $logout = Auth::guard('admin')->logout();
        if($logout){
            return redirect('login')->with('success', 'Logout success !');
        }else{
            return back()->with('danger','Gagal logout, coba ulangi kembali !');
        }
    }
}
