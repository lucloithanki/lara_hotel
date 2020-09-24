<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('dang-nhap', function () {
    echo 'đây là trang đăng nhập';
})->name('dang-nhap');

Route::get('dang-ky', function () {
    echo 'đây là trang đăng ký';
})->name('dang-ky');

Route::get('lien-he', function () {
    echo 'đây là trang liên hệ';
})->name('lien-he');

Route::get('/', function () {
    // dd(bcrypt('123456'));
    return view('welcome');
})->name('/');
