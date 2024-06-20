@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi Tiết Banner</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chi tiết Banner</li>
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
            <a class="btn btn-sm btn-info "
            href="{{route('admin.banner.index')}}">
            <i class="fas fa-arrow-left"></i>
              <strong>Về danh sách</strong></a>
              <a href="{{route('admin.banner.edit',['id'=>$banner->id])}}" class="btn btn-sm btn-primary">
                <i class="fas fa-edit"> Sửa</i>
            </a>
              <a href="{{route('admin.banner.delete',['id'=>$banner->id])}}" class="btn btn-sm btn-danger">
              <i class="fas fa-trash"> Xóa</i>
          </a>
          </div>
        </div> 
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width:30%" class="text-center">Tên trường</th>
                    <th style="width:70%" class="text-center">Giá trị</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">ID</td>
                    <td class="text-center">{{$banner->id}}</td>
                </tr>
                <tr>
                    <td class="text-center">Tên Banner</td>
                    <td class="text-center">{{$banner->name}}</td>
                </tr>
                <tr>
                    <td class="text-center">Slug</td>
                    <td class="text-center">{{$banner->link}}</td>
                </tr>
                <tr>
                    <td class="text-center">Sắp sếp</td>
                    <td class="text-center">{{$banner->sort_order}}</td>
                </tr>
                <tr>
                    <td class="text-center">Hình ảnh</td>
                    <td class="text-center">
                        <img src="{{asset('images/banners/'.$banner->image)}}" class="width:100px" alt="{{$banner->name}}">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">Mô tả</td>
                    <td class="text-center">{{$banner->description}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_by</td>
                    <td class="text-center">{{$banner->created_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_at</td>
                    <td class="text-center">{{$banner->created_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_by</td>
                    <td class="text-center">{{$banner->updated_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_at</td>
                    <td class="text-center">{{$banner->updated_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">status</td>
                    <td class="text-center">{{$banner->status}}</td>
                </tr>
            </tbody>
        </table>
    </div>
      </table>  
    </div>
  </section>
@endsection
@section('title','Chi tiết Banner')