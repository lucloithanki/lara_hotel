@extends('admin.admin')
@section('title','ADMIN - Jadusona')
@section('name','admin')
@section('page','/')
@section('content')
<!-- STATISTIC-->
<section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">{{ count($member) }}</h2>
                                <span class="desc">Thành Viên</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">{{ count($pro) }}</h2>
                                <span class="desc">Sản Phẩm</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">{{ count($cate) }}</h2>
                                <span class="desc">Danh mục</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">{{ count($comment) }}</h2>
                                <span class="desc">Bình Luận</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
            <div class="col-lg-12">
<div class="card">
   <div class="card-body">
      <div class="card-header text-danger">
         Quản Lý Slider
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Slider</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Thêm Slider</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="preview-tab" data-toggle="tab" href="#preview" role="tab" aria-controls="preview" aria-selected="false">Preview</a>
         </li>
      </ul>
      <div class="tab-content pl-3 p-1" id="myTabContent">
         <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-data2">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Tên ảnh</th>
                     <th>Link</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($slide as $item)
                  <tr class="tr-shadow">
                     <td>{{ $item->id_slider}}</td>
                     <td>{{ $item->name}}</td>
                     <td>{{ $item->anh}}</td>
                     <td><img src="{{ $item->anh}}" alt="" srcset="" width="200px" height="80px"></td>
                     <td>
                        <div class="table-data-feature">
                           <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                           <i class="zmdi zmdi-edit"></i>
                           </button>
                           <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                           <i class="zmdi zmdi-delete"></i>
                           </button>
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>

         <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="card">
               <div class="card-header">
                  <strong>Basic Form</strong> Elements
               </div>
               <div class="card-body card-block">
                  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                     @csrf
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="text-input" class=" form-control-label">Tên Ảnh</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="text" id="text-input" name="name-img" class="form-control">
                           <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="file-input" class=" form-control-label">Chọn file</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="file" id="file-input" name="file-img" class="form-control-file">
                        </div>
                     </div>
                  </form>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">
                  <i class="fa fa-dot-circle-o"></i> Thêm
                  </button>
               </div>
            </div>
         </div>

         <div class="tab-pane fade" id="preview" role="tabpanel" aria-labelledby="preview-tab">
            <div class="w3-content" style="width:100%">
            @foreach($slide as $items)
            <u>{{ $items->id_slider}}</u>
            <img class="mySlides" src="{{ $items->anh }}">
            @endforeach
            </div>
            <div class="w3-center">
                <div class="w3-section">
                    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                    <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
                </div>
            </div>
        </div>
      </div>
   </div>
</div>
</div>

<!--QUan ly thanh vien-->            
<div class="col-lg-12">
<div class="card">
   <div class="card-body">
      <div class="card-header text-danger">
         Quản Lý Thành Viên
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
            <a class="nav-link active show" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="true">Thành Viên</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="thanhvien-tab" data-toggle="tab" href="#thanhvien" role="tab" aria-controls="thanhvien" aria-selected="false">Thêm Thành Viên</a>
         </li>
      </ul>
      <div class="tab-content pl-3 p-1" id="myTabContent">
         <div class="tab-pane fade active show" id="member" role="tabpanel" aria-labelledby="member-tab">
            <table class="table table-data2">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Họ/Tên</th>
                     <th>Email</th>
                     <th>Số ĐT</th>
                     <th>Địa chỉ</th>
                     <th>Tuổi</th>
                     <th>Avatar</th>
                     <th>Mật Khẩu</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($member as $item)
                  <tr class="tr-shadow">
                     <td>{{ $item->id_member}}</td>
                     <td class="text-info"><a href="#">{{ $item->name}}</a></td>
                     <td class="text-dark">{{ $item->email}}</td>
                     <td class="text-success">{{ $item->phone}}</td>
                     <td class="text-dark">{{ $item->address}}</td>
                     <td class="text-danger">{{ $item->age}}</td>
                     <td><img src="{{ $item->avatar}}" alt="" srcset="" width="77px" height="77px"></td>
                     <td class="text-muted">{{ $item->password}}</td>
                     <td>
                        <div class="table-data-feature">
                           <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                           <i class="zmdi zmdi-edit"></i>
                           </button>
                           <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                           <i class="zmdi zmdi-delete"></i>
                           </button>
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         
         <div class="tab-pane fade" id="thanhvien" role="tabpanel" aria-labelledby="thanhvien-tab">
            <div class="card">
               <div class="card-header">
                  <strong>Basic Form</strong> Elements
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
         </div>
      </div>
   </div>
</div>
</div>


            

@endsection