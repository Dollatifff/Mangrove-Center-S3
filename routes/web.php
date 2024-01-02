<?php

use App\Http\Controllers\Admin\Admindashboard;
use App\Http\Controllers\Admin\Adminevent;
use App\Http\Controllers\Admin\Adminkatalog;
use App\Http\Controllers\Admin\Adminpenanaman;
use App\Http\Controllers\Admin\Adminprofile;
use App\Http\Controllers\Landingcontroller;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function () {


    Route::controller(Landingcontroller::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'loginaksi');
    });
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::controller(Admindashboard::class)->group(function () {
        Route::get('/dashboard', 'index');
    });

    Route::controller(Adminevent::class)->group(function () {
        Route::get('/event', 'index');
        Route::get('/event/tambah', 'tambah');
        Route::post('/event/tambah', 'aksiTambah');
        Route::get('/event/detail/{event}', 'detail');
        Route::get('/event/edit/{event}', 'edit');
        Route::post('/event/update/{event}', 'akisEdit');
        Route::get('/event/hapus/{event}', 'hapus');
    });
    Route::controller(Adminkatalog::class)->group(function () {
        Route::get('/katalog', 'index');
        Route::get('/katalog/tambah', 'tambah');
        Route::post('/katalog/tambah', 'aksiTambah');
        Route::get('/katalog/detail/{katalog}', 'detail');
        Route::get('/katalog/edit/{katalog}', 'edit');
        Route::post('/katalog/update/{katalog}', 'akisEdit');
        Route::get('/katalog/hapus/{katalog}', 'hapus');
    });
    Route::controller(Adminkatalog::class)->group(function () {
        Route::get('/katalog', 'index');
        Route::get('/katalog/tambah', 'tambah');
        Route::post('/katalog/tambah', 'aksiTambah');
        Route::get('/katalog/detail/{katalog}', 'detail');
        Route::get('/katalog/edit/{katalog}', 'edit');
        Route::post('/katalog/update/{katalog}', 'akisEdit');
        Route::get('/katalog/hapus/{katalog}', 'hapus');
    });
    Route::controller(Adminkatalog::class)->group(function () {
        Route::get('/katalog', 'index');
        Route::get('/katalog/tambah', 'tambah');
        Route::post('/katalog/tambah', 'aksiTambah');
        Route::get('/katalog/detail/{katalog}', 'detail');
        Route::get('/katalog/edit/{katalog}', 'edit');
        Route::post('/katalog/update/{katalog}', 'akisEdit');
        Route::get('/katalog/hapus/{katalog}', 'hapus');
    });
    Route::controller(Adminpenanaman::class)->group(function () {
        Route::get('/penanaman', 'index');
        Route::get('/penanaman/tambah', 'tambah');
        Route::post('/penanaman/tambah', 'aksiTambah');
        Route::get('/penanaman/detail/{penanaman}', 'detail');
        Route::get('/penanaman/edit/{penanaman}', 'edit');
        Route::post('/penanaman/update/{penanaman}', 'akisEdit');
        Route::get('/penanaman/hapus/{penanaman}', 'hapus');

    });
    Route::controller(Adminpenanaman::class)->group(function () {
        Route::get('/penanaman', 'index');
        Route::get('/penanaman/tambah', 'tambah');
        Route::post('/penanaman/tambah', 'aksiTambah');
        Route::get('/penanaman/detail/{penanaman}', 'detail');
        Route::get('/penanaman/edit/{penanaman}', 'edit');
        Route::post('/penanaman/update/{penanaman}', 'akisEdit');
        Route::get('/penanaman/hapus/{penanaman}', 'hapus');
    
    });
    Route::controller(Adminprofile::class)->group(function () {
        Route::get('/profile', 'profile');
        Route::post('/profile/{admin}', 'editprofile');
        Route::get('/logout', 'logout');
      
    });

});

