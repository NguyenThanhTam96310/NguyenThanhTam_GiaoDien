@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi Tiết Đơn Hàng</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
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
            href="{{route('admin.order.index')}}">
            <i class="fas fa-arrow-left"></i>
              <strong>Về danh sách</strong></a>
              <a href="{{route('admin.order.edit',['id'=>$order->id])}}" class="btn btn-sm btn-primary">
                <i class="fas fa-edit"> Sửa</i>
            </a>
              <a href="{{route('admin.order.delete',['id'=>$order->id])}}" class="btn btn-sm btn-danger">
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
                    <td class="text-center">{{$order->id}}</td>
                </tr>
                <tr>
                  <td class="text-center">User_ID</td>
                  <td class="text-center">{{$order->user_id}}</td>
              </tr>
                <tr>
                    <td class="text-center">Tên đơn hàng</td>
                    <td class="text-center">{{$order->name}}</td>
                </tr>
                <tr>
                    <td class="text-center">Phone</td>
                    <td class="text-center">{{$order->phone}}</td>
                </tr>
                <tr>
                    <td class="text-center">Email</td>
                    <td class="text-center">{{$order->email}}</td>
                </tr>
                <tr>
                    <td class="text-center">Địa chỉ</td>
                    <td class="text-center">{{$order->address}}</td>
                </tr>
                <tr>
                    <td class="text-center">Ghi chú</td>
                    <td class="text-center">{{$order->note}}</td>
                </tr>
                <tr>
                    <td class="text-center">Created_at</td>
                    <td class="text-center">{{$order->created_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_by</td>
                    <td class="text-center">{{$order->updated_by}}</td>
                </tr>
                <tr>
                    <td class="text-center">Updated_at</td>
                    <td class="text-center">{{$order->updated_at}}</td>
                </tr>
                <tr>
                    <td class="text-center">status</td>
                    <td class="text-center">{{$order->status}}</td>
                </tr>
            </tbody>
        </table>
    </div>
      </table>  
    </div>
  </section>
@endsection
@section('title','Chi tiết đơn hàng')