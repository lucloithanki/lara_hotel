@extends('layout.viewlogin')
@section('title','Đăng Ký - Jadusona Thế giới cho bé')
@section('content')
<div class="card">
               <div class="card-header">
                  <strong>Đăng Ký Thành Viên</strong>
               </div>
               <div class="card-body card-block">
                  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                     @csrf
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="text-input" class=" form-control-label">Họ/Tên</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="text" id="text-input" name="name" placeholder="Tên khai sinh của bạn" class="form-control">
                           <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="email-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="email" id="email-input" name="email" placeholder="Email của bạn theo định dạng ****@***.com" class="form-control">
                           <!-- <small class="help-block form-text">Please enter your email</small> -->
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="text-input" class=" form-control-label">Số điện thoại</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="text" id="text-input" name="phone" placeholder="" class="form-control">
                           <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="password-input" class=" form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="password" id="password-input" name="password" placeholder="Mật khẩu > 6 ký tự, gồm chữ và số" class="form-control">
                           <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="text-input" class=" form-control-label">Địa chỉ</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="text" id="text-input" name="address" placeholder="" class="form-control">
                           <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="text-input" class=" form-control-label">Tuổi</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="text" id="text-input" name="age" placeholder="" class="form-control">
                           <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="file-input" class=" form-control-label">Ảnh đại diện</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="file" id="file-input" name="file" class="form-control-file">
                        </div>
                     </div>
                  </form>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Submit
                  </button>
               </div>
            </div>
@endsection