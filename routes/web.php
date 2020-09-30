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

Route::get('/', function () {
    // dd(bcrypt('123456'));
    $pro = Products::with('categorys')->get()->all();
    $com = Comments::with('members')->get()->all();
    $sli = Sliders::get()->all();
    $cate = Categorys::all();
    $sptopview = Products::get()->sortByDesc('view')->first();
    // dd($pro);
    return view('welcome',[
        'product'=>$pro,
        'slider'=>$sli,
        'comment'=>$com,
        'category'=> $cate,
        'topview' =>$sptopview
    ]);})->name('/');

Route::get('shop' ,function() {
        $data = Products::all()->get();
        $cate = Categorys::all();
        return view('shop',[
            'product'=> $data,
            'category'=> $cate
        ]);
    })->name('shop');

Route::get('shop/{id_cate}' ,function($id_cate) {
    $data = Products::where('id_cate',$id_cate)->get();
    $cate = Categorys::all();
    return view('shop',[
        'product'=>$data,
        'category'=> $cate
    ]);
});

Route::get('/admin', function() {
    $cate = Categorys::all();
    $pro = Products::all();
    $slide = Sliders::all();
    $comment = Comments::all();
    $mem = Members::all();
    return view('admin.home',
        [
            'cate' => $cate,
            'pro' => $pro,
            'slide' => $slide,
            'member' => $mem,
            'comment' => $comment
        ]
    );
})->name('admin');

Route::group(['prefix'=>'admin/'],function() {

    Route::group(['prefix' => 'slider'],function(){
        Route::get('/','sliderController@index')->name('slider.index');
        Route::get('show/{user_id}','sliderController@show')->name('slider.show');
        Route::get('create','sliderController@create')->name('slider.create');
        Route::get('stote','sliderController@stote')->name('slider.save');
        Route::get('edit/{id_slider}','sliderController@edit')->name('slider.edit');
        Route::post('update/{user_id}','sliderController@update')->name('slider.update');
        Route::get('delete/{user}','sliderController@delete')->name('slider.delete');
    });

    Route::group(['prefix' => 'cate'],function(){
        Route::get('/','cate@index')->name('cate.index');
        Route::get('show/{cate}','cateController@show')->name('cate.show');
        Route::get('create','cateController@create')->name('cate.create');
        Route::get('stote','cateController@stote')->name('cate.save');
        Route::get('edit/{id_cate}','cateController@edit')->name('cate.edit');
        Route::post('update/{cate}','cateController@update')->name('cate.update');
        Route::get('delete/{cate}','cateController@delete')->name('cate.delete');
    });


});

Route::get('dang-nhap', function () {
    $pro = Products::with('categorys')->get()->all();
    $com = Comments::with('members')->get()->all();
    $sli = Sliders::get()->all();
    $cate = Categorys::all();
    $sptopview = Products::get()->sortByDesc('view')->first();
    return view('dangnhap',[
        'product'=>$pro,
        'slider'=>$sli,
        'comment'=>$com,
        'category'=> $cate,
        'topview' =>$sptopview
    ]);
})->name('dang-nhap');

Route::get('dang-ky', function () {
    $pro = Products::with('categorys')->get()->all();
    $com = Comments::with('members')->get()->all();
    $sli = Sliders::get()->all();
    $cate = Categorys::all();
    $sptopview = Products::get()->sortByDesc('view')->first();

    return view('dangky',[
        'product'=>$pro,
        'slider'=>$sli,
        'comment'=>$com,
        'category'=> $cate,
        'topview' =>$sptopview
    ]);
})->name('dang-ky');

Route::get('lien-he', function () {
     $pro = Products::with('categorys')->get()->all();
     $com = Comments::with('members')->get()->all();
     $sli = Sliders::get()->all();
     $cate = Categorys::all();
     $sptopview = Products::get()->sortByDesc('view')->first();
     // dd($pro);
     return view('lienhe',[
         'product'=>$pro,
         'slider'=>$sli,
         'comment'=>$com,
         'category'=> $cate,
         'topview' =>$sptopview
     ]);
})->name('lien-he');
Route::get('shop', function () {
    $pro = Products::with('categorys')->get()->all();
    $com = Comments::with('members')->get()->all();
    $sli = Sliders::get()->all();
    $cate = Categorys::all();
    $sptopview = Products::get()->sortByDesc('view')->first();
    // dd($pro);
    return view('shop',[
        'product'=>$pro,
        'slider'=>$sli,
        'comment'=>$com,
        'category'=> $cate,
        'topview' =>$sptopview
    ]);
})->name('all');