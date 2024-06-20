@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi Tiết Bài Viết</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chi tiết bài viết</li>
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
            href="{{route('admin.post.index')}}">
            <i class="fas fa-arrow-left"></i>
              <strong>Về danh sách</strong></a>
              <a href="{{route('admin.post.edit',['id'=>$post->id])}}" class="btn btn-sm btn-primary">
                <i class="fas fa-edit"> Sửa</i>
            </a>
              <a href="{{route('admin.post.delete',['id'=>$post->id])}}" class="btn btn-sm btn-danger">
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
                    <td class="text-center">{{$post->id}}</td>
                </tr>
                <tr>
                    <td class="text-center">Tiêu đề</td>
                    <td class="text-center">{{$post->title}}</td>
                </tr>
                <tr>
                    <td class="text-center">Slug</td>
                    <td class="text-center">{{$post->slug}}</td>
                </tr>
                <tr>
                    <td class="text-center">Topic_id</td>
                    <td class="text-center">{{$post->topic_id}}</td>
                </tr>
                <tr>
                    <td class="text-center">Hình ảnh</td>
                    <td class="text-center">
                        <img src="{{asset('images/posts/'.$post->image)}}" class="width:100px" alt="{{$post->name}}">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">Mô tả</td>
                    <td class="text-center">{{$post->description}}</td>
                </tr>
                <tr>
                  <td class="text-center">Chi tiết</td>
                  <td class="text-center">{{$post->detail}}</td>
                </tr>
                <tr>
                  <td class="text-center">Kiểu</td>
                  <td class="text-center">{{$post->type}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_by</td>
                    <td class="text-center">{{$post->created_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_at</td>
                    <td class="text-center">{{$post->created_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_by</td>
                    <td class="text-center">{{$post->updated_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_at</td>
                    <td class="text-center">{{$post->updated_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">status</td>
                    <td class="text-center">{{$post->status}}</td>
                </tr>
            </tbody>
        </table>
    </div>
      </table>  
    </div>
  </section>
@endsection
@section('title','Chi tiết bài viết')