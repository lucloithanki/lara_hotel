@extends('admin.layout.admin')
@section('title','Edit SLider -ADMIN - Jadusona')
@section('name','admin')
@section('page','editSlider')
@section('content')

<div class="col-lg-12">
<div class="card">
   <div class="card-body">
      <div class="card-header text-danger">
         Quản Lý Slider
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Thêm Slider</a>
         </li>

      </ul>
      <div class="tab-content pl-3 p-1" id="myTabContent">
         <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                           <input type="text" id="text-input" name="name-img" value="{{ $slider->name }}" class="form-control">
                           <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="text-input" class=" form-control-label">Link</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="text" id="text-input" name="name-img" value="{{ $slider[anh] }}" class="form-control">
                           <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="file-input" class=" form-control-label">Chọn file</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <input type="file" id="file-input" name="file-img" value="" class="form-control-file">
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col col-md-3">
                           <label for="file-input" class=" form-control-label">Preview</label>
                        </div>
                        <div class="col-12 col-md-9">
                           <img src="{{ $slider[anh] }}" alt="" srcset="">
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
      </div>
   </div>
</div>
</div>


            

@endsection