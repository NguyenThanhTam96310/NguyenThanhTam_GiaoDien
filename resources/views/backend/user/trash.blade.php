@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Thùng rác thành viên</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Thùng rác thành viên</li>
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
              <a class="btn btn-sm btn-info "
              href="{{route('admin.user.index')}}">
              <i class="fas fa-arrow-left"></i>
                <strong>Về danh sách</strong></a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width:30px" class="text-center">#</th>
                    <th>Họ và tên</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th style="width:190px" class="text-center">Chức năng</th>
                    <th style="width:30px" class="text-center">ID</th>
                </tr>
            </thead>
            <tbody>
              @foreach($list as $row)
                <tr>
                    <td>
                        <input type="checkbox">
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
                     <a href="{{route('admin.user.show',$args)}}" class="btn btn-sm btn-info">
                         <i class="fas fa-eye"></i>
                     </a>
                     <a href="{{route('admin.user.restore',$args)}}" class="btn btn-sm btn-primary">
                         <i class="fas fa-undo"></i>
                     </a>
                     <form class="d-inline" action="{{route('admin.user.destroy',$args)}}" method="post">
                       @csrf  
                       @method('delete')
                       <button  class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                     </form>
                 
                 </td>
                    <td>{{$row->id}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection
@section('title','Thùng rác thành viên')