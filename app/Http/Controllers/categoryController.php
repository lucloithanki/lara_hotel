<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        $user = User::all();
        // dd($user);
        return view('admin.user.index',[
            'user'=> $user
        ]);
    }
    public function show($user_id){
        $show = User::find($user_id);
        return view('admin.user.show',['show' => $show]);
        // return 'GET Giao diện hiển thị chi tiết 1 user admin/user/show/{?id}';
    }
    public function create(){
        return view('admin.user.create');
    }
    public function stote(){
        $data = request()->all();
        unset($data["_token"]);
        // dd($data);
        User::create($data);
        return redirect()->route('user.index');
        // return 'POST dữ liệu vừa thêm lưu vào db vào admin/user/save';
    }
    public function edit($user_id){
        // $user = User::all();
        $find = User::find($user_id);
        // dd($fin);
        return view('admin.user.edit',['user' => $find ]); 
        // return 'GET Day la giao dien sửa 1 user trong DB qua{$id} admin/user/edit{$id}';
    }
    public function update($user_id){
        $users = User::find($user_id);
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
        return redirect()->route('user.index');
    }
    public function delete(User $user){
        $user->delete($user->user);
        return redirect()->route('user.index');
    }
}
