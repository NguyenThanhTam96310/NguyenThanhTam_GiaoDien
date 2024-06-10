@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Liên hệ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Liên hệ</li>
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
              <a class="btn btn-sm btn-success "
              href="{{route('admin.contact.create')}}">
              <i class="fas fa-calendar-plus"></i>
                <strong>Thêm liên hệ</strong></a>
              <a class="btn btn-sm btn-danger "
              href="{{route('admin.contact.trash')}}">
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
                    <td>1</td>
                </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection
@section('title','Liên hệ')