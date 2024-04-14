<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/register', function () {
    return view('login.register');
});

Route::get('/admin_panel', function () {
    return view('admin.admin');
});
Route::get('/user', function () {
    return view('user.user');
});
Route::get('/create', function () {
    return view('create.tambah');
});
Route::get('/update', function () {
    return view('update.update');
});
Route::get('/pinjam_barang', function () {
    return view('pinjam.pinjam');
});
