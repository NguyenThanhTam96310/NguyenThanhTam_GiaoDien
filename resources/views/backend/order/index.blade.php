@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Đơn hàng</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Đơn hàng</li>
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
            <div class="col-12 text-right">
              <a class="btn btn-sm btn-danger "
              href="{{route('admin.order.trash')}}">
              <i class="fas fa-trash"></i>
                <strong>Thùng rác</strong></a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width:30px" class="text-center">#</th>
                    <th style="width:140px" class="text-center">Mã khách hàng</th>
                    <th>Tên người nhận</th>
                    <th style="width:190px">Điện thoại người nhận</th>
                    <th>Địa chỉ người nhận</th>
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
                  {{$row->id}}
                </td>
                <td>
                  {{$row->name}}
                </td>
                <td>
                  {{$row->phone}}
                </td>
                <td>
                  {{$row->email}}
                </td>
          @php
                    $args=['id'=>$row->id];
                @endphp
                  <td class="text-center">
                  @if ($row->status==1)
                    <a href="{{route('admin.order.status',$args)}}" class="btn btn-sm btn-success">
                      <i class="fas fa-toggle-on"></i>
                  </a>
                  
                  @else
                      <a href="{{route('admin.order.status',$args)}}" class="btn btn-sm btn-danger">
                        <i class="fas fa-toggle-off"></i>
                    </a>
                  @endif
                      
                  <a href="{{route('admin.order.show',$args)}}" class="btn btn-sm btn-info">
                      <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{route('admin.order.edit',$args)}}" class="btn btn-sm btn-primary">
                      <i class="fas fa-edit"></i>
                  </a>
                  <a href="{{route('admin.order.delete',$args)}}" class="btn btn-sm btn-danger">
                      <i class="fas fa-trash"></i>
                  </a>
                    </td>
            </tr>
               @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection
@section('title','Đơn hàng')