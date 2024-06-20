@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi Tiết chủ đề</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chi tiết chủ đề</li>
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
            href="{{route('admin.topic.index')}}">
            <i class="fas fa-arrow-left"></i>
              <strong>Về danh sách</strong></a>
              <a href="{{route('admin.topic.edit',['id'=>$topic->id])}}" class="btn btn-sm btn-primary">
                <i class="fas fa-edit"> Sửa</i>
            </a>
              <a href="{{route('admin.topic.delete',['id'=>$topic->id])}}" class="btn btn-sm btn-danger">
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
                    <td class="text-center">{{$topic->id}}</td>
                </tr>
                <tr>
                    <td class="text-center">Tên chủ đề</td>
                    <td class="text-center">{{$topic->name}}</td>
                </tr>
                <tr>
                    <td class="text-center">Slug</td>
                    <td class="text-center">{{$topic->slug}}</td>
                </tr>
                <tr>
                    <td class="text-center">Mô tả</td>
                    <td class="text-center">{{$topic->description}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_by</td>
                    <td class="text-center">{{$topic->created_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_at</td>
                    <td class="text-center">{{$topic->created_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_by</td>
                    <td class="text-center">{{$topic->updated_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_at</td>
                    <td class="text-center">{{$topic->updated_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">status</td>
                    <td class="text-center">{{$topic->status}}</td>
                </tr>
            </tbody>
        </table>
    </div>
      </table>  
    </div>
  </section>
@endsection
@section('title','Chi tiết chủ đề')