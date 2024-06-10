@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản Lý Menu</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Menu</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-12 text-right">
            <a class="btn btn-sm btn-danger "
            href="{{route('admin.product.trash')}}">
            <i class="fas fa-trash"></i>
              <strong>Thùng rác</strong></a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="accordion" id="accordionExample">
                    <div class="card mb-0 p-3">
                       <select name="position" class="form-control">
                          <option value="mainmenu">Main Menu</option>
                          <option value="footermenu">Footer Menu</option>
                       </select>
                    </div>
                </div>
                <div class="mb-3">
                   <label>Tên menu (*)</label>
                   <input type="text" name="name" id="name" placeholder="Nhập tên menu" class="form-control">
                </div>
                <div class="mb-3">
                   <label>Slug</label>
                   <input type="text" name="slug" id="slug" placeholder="Nhập slug" class="form-control">
                </div>
                <div class="mb-3">
                   <label>Mô tả</label>
                   <textarea name="description" class="form-control"></textarea>
                </div>
                {{-- <div class="mb-3">
                   <label>Danh mục cha (*)</label>
                   <select name="parent_id" class="form-control">
                      <option value="">None</option>
                      <option value="1">Tên chủ đề</option>
                   </select>
                </div> --}}
                <div class="mb-3">
                   <label>Hình đại diện</label>
                   <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                   <label>Trạng thái</label>
                   <select name="status" class="form-control">
                      <option value="1">Xuất bản</option>
                      <option value="2">Chưa xuất bản</option>
                   </select>
                </div>
                <div class="mb-3 text-right">
                    <a href="" class="btn btn-sm btn-success" >
                       <strong>Thêm menu</strong>
                    </a>
                </div>
             </div>
            <div class="col-md-8">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width:30px" class="text-center">#</th>
                            <th style="width:90px" class="text-center">Hình ảnh</th>
                            <th>Tên menu</th>
                            <th>Liên kết</th>
                            <th style="width:190px" class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($list as $row)
                       <tr>
                        <td>
                          <input type="checkbox">
                        </td>
                        <td>
                          <img src="" class="img-fluid" alt="">
                        </td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->link}}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm btn-success">
                                <i class="fas fa-toggle-on"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('title','Menu')

