@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi Tiết Thành Viên</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chi tiết thành viên</li>
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
            href="{{route('admin.user.index')}}">
            <i class="fas fa-arrow-left"></i>
              <strong>Về danh sách</strong></a>
              <a href="{{route('admin.user.edit',['id'=>$user->id])}}" class="btn btn-sm btn-primary">
                <i class="fas fa-edit"> Sửa</i>
            </a>
              <a href="{{route('admin.user.delete',['id'=>$user->id])}}" class="btn btn-sm btn-danger">
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
                    <td class="text-center">{{$user->id}}</td>
                </tr>
                <tr>
                    <td class="text-center">Tên thành viên</td>
                    <td class="text-center">{{$user->name}}</td>
                </tr>
                <tr>
                    <td class="text-center">Email</td>
                    <td class="text-center">{{$user->email}}</td>
                </tr>
                <tr>
                    <td class="text-center">Điện thoại</td>
                    <td class="text-center">{{$user->phone}}</td>
                </tr>
                <tr>
                    <td class="text-center">Tên đăng nhập</td>
                    <td class="text-center">{{$user->username}}</td>
                </tr>
                <tr>
                    <td class="text-center">Địa chỉ</td>
                    <td class="text-center">{{$user->address}}</td>
                </tr>
                <tr>
                  <td class="text-center">Quyền</td>
                  <td class="text-center">{{$user->roles}}</td>
              </tr>
                <tr>
                    <td class="text-center">Created_by</td>
                    <td class="text-center">{{$user->created_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_at</td>
                    <td class="text-center">{{$user->created_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_by</td>
                    <td class="text-center">{{$user->updated_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_at</td>
                    <td class="text-center">{{$user->updated_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">status</td>
                    <td class="text-center">{{$user->status}}</td>
                </tr>
            </tbody>
        </table>
    </div>
      </table>  
    </div>
  </section>
@endsection
@section('title','Chi tiết thành viên')