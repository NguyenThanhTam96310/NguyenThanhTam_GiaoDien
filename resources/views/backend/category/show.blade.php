@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi Tiết Danh Mục</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chi tiết anh mục</li>
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
            href="{{route('admin.category.index')}}">
            <i class="fas fa-arrow-left"></i>
              <strong>Về danh sách</strong></a>
              <a href="{{route('admin.category.edit',['id'=>$category->id])}}" class="btn btn-sm btn-primary">
                <i class="fas fa-toggle-off"> Sửa</i>
            </a>
              <a href="{{route('admin.category.delete',['id'=>$category->id])}}" class="btn btn-sm btn-danger">
              <i class="fas fa-eye"> Xóa</i>
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
                    <td class="text-center">{{$category->id}}</td>
                </tr>
                <tr>
                    <td class="text-center">Tên danh mục</td>
                    <td class="text-center">{{$category->name}}</td>
                </tr>
                <tr>
                    <td class="text-center">Slug</td>
                    <td class="text-center">{{$category->slug}}</td>
                </tr>
                <tr>
                    <td class="text-center">Danh mục cha</td>
                    <td class="text-center">{{$category->parent_id}}</td>
                </tr>
                <tr>
                    <td class="text-center">Sắp sếp</td>
                    <td class="text-center">{{$category->sort_order}}</td>
                </tr>
                <tr>
                    <td class="text-center">Hình ảnh</td>
                    <td class="text-center">
                        <img src="{{asset('images/categorys/'.$category->image)}}" class="width:100px" alt="{{$category->name}}">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">Mô tả</td>
                    <td class="text-center">{{$category->description}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_by</td>
                    <td class="text-center">{{$category->created_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_at</td>
                    <td class="text-center">{{$category->created_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_by</td>
                    <td class="text-center">{{$category->updated_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_at</td>
                    <td class="text-center">{{$category->updated_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">status</td>
                    <td class="text-center">{{$category->status}}</td>
                </tr>
            </tbody>
        </table>
    </div>
      </table>  
    </div>
  </section>
@endsection
@section('title','Chi tiết danh mục')