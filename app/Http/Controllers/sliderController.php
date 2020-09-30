<?php

namespace App\Http\Controllers;
use App\Model\Sliders;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function index(){
        $user = User::all();
        // dd($user);
        return view('admin.user.index',[
            'user'=> $user
        ]);
    }
    public function show($user_id){
        $slide = Sliders::all();
        return view('admin.home', [
            'cate' => $cate,
            'pro' => $pro,
            'slide' => $slide,
            'member' => $mem,
            'comment' => $comment
        ]);
    }
    
    public function stote(){
        $data = request()->all();
        unset($data["_token"]);
        // dd($data);
        Sliders::create($data);
        return redirect()->route('admin.home');
    }
    public function edit($id_slider){
        $find = Sliders::where('id_slider','=',$id_slider)->get()->all();
        // dd($find);
        return view('admin.editSlider',['slider' => $find]); 
    }
    public function update($id_slider){
        $sliders = Sliders::find($id_slider);
        $params = [];
        $params['name'] = request()->get('name');
        $params['birthday'] = request()->get('birthday');
        $params['phone'] = request()->get('phone');
        $params['email'] = request()->get('email');
        $params['password'] = request()->get('password');
        $params['role'] = request()->get('role');
        $params['is_active'] = request()->get('is_active');
        // dd($params);
        $users->update($params);
        return redirect()->route('admin.home');
    }
    public function delete(Sliders $slider){
        $uslider->delete($slider->slider);
        return redirect()->route('admin.home');
    }
}
