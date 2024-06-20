@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi Tiết Liên Hệ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chi tiết liên hệ</li>
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
            href="{{route('admin.contact.index')}}">
            <i class="fas fa-arrow-left"></i>
              <strong>Về danh sách</strong></a>
              <a href="{{route('admin.contact.edit',['id'=>$contact->id])}}" class="btn btn-sm btn-primary">
                <i class="fas fa-edit"> Sửa</i>
            </a>
              <a href="{{route('admin.contact.delete',['id'=>$contact->id])}}" class="btn btn-sm btn-danger">
              <i class="fas fa-trash"> Xóa</i>
          </a>
          </div>
        </div> 
      </div>
      <div class="card-body">
        <table class="table table-bcontacted table-hover">
            <thead>
                <tr>
                    <th style="width:30%" class="text-center">Tên trường</th>
                    <th style="width:70%" class="text-center">Giá trị</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">ID</td>
                    <td class="text-center">{{$contact->id}}</td>
                </tr>
                <tr>
                  <td class="text-center">User_ID</td>
                  <td class="text-center">{{$contact->user_id}}</td>
              </tr>
                <tr>
                    <td class="text-center">Tên liên hệ</td>
                    <td class="text-center">{{$contact->name}}</td>
                </tr>
                <tr>
                    <td class="text-center">Điện thoại</td>
                    <td class="text-center">{{$contact->phone}}</td>
                </tr>
                <tr>
                    <td class="text-center">Email</td>
                    <td class="text-center">{{$contact->email}}</td>
                </tr>
                <tr>
                    <td class="text-center">Tiêu đề</td>
                    <td class="text-center">{{$contact->title}}</td>
                </tr>
                <tr>
                    <td class="text-center">Nội dung</td>
                    <td class="text-center">{{$contact->content}}</td>
                </tr>
                <tr>
                  <td class="text-center">Reply_id</td>
                  <td class="text-center">{{$contact->reply_id}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_at</td>
                    <td class="text-center">{{$contact->created_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_by</td>
                    <td class="text-center">{{$contact->updated_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_at</td>
                    <td class="text-center">{{$contact->updated_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">status</td>
                    <td class="text-center">{{$contact->status}}</td>
                </tr>
            </tbody>
        </table>
    </div>
      </table>  
    </div>
  </section>
@endsection
@section('title','Chi tiết liên hệ')