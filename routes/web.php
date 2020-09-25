<?php

use Illuminate\Support\Facades\Route;
use App\Model\Products;
use App\Model\Members;
use App\Model\Categorys;
use App\Model\Comments;
use App\Model\Sliders;
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
    $pro = Products::with('categorys')->get()->all();
    $com = Comments::with('members')->get()->all();
    $sli = Sliders::get()->all();
    $sptopview = Products::get()->sortByDesc('view')->first();
    // dd($sptopview);
    return view('welcome',[
        'product'=>$pro,
        'slider'=>$sli,
        'comment'=>$com,
        'topview' =>$sptopview
    ]);

})->name('/');
