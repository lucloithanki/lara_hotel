@extends('admin.admin')
@section('title','ADMIN - Jadusona')
@section('name','admin')
@section('page','/')
@section('content')
<div class="col-lg-12">
<div class="card">
   <div class="card-body">
      <div class="card-header">
         Quản Lý Thành Viên
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thành Viên</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Thêm Thành Viên</a>
         </li>
      </ul>
      <div class="tab-content pl-3 p-1" id="myTabContent">
         <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{ $item->phone}}</td>
                    <td>{{ $item->address}}</td>
                    <td>{{ $item->age}}</td>
                    <td>{{ $item->avatar}}</td>
                    <td>{{ $item->password}}</td>
               </tr>
               @endforeach
                  
                     <td>Lori Lynch</td>
                     <td>
                        <span class="block-email">lori@example.com</span>
                     </td>
                     <td class="desc">Samsung S8 Black</td>
                     <td>2018-09-27 02:12</td>
                     <td>
                        <span class="status--process">Processed</span>
                     </td>
                     <td>$679.00</td>
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
                  
                  <tr class="spacer"></tr>
               </tbody>
            </table>
         </div>
         <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h3>Menu 1</h3>
            <p>Some content here.</p>
         </div>
      </div>
   </div>
</div>
</div>
@endsection