@extends('layouts.admin')
@section('content')
<section class="content-header">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cập nhật liên hệ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Tranh chủ</a></li>
                            <li class="breadcrumb-item active">Cập nhật liên hệ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <form action="{{route('admin.order.update',['id'=>$order->id])}}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('put')
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a class="btn btn-sm btn-info" href="{{route('admin.order.index')}}">
                                <i class="fa fa-arrow-left"></i> Về danh sách
                            </a>
                            <button type="submit" name="update" class="btn btn-sm btn-success">
                                <i class="fa fa-save"></i> Cập nhật
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label for="name">Tên khách hàng</label>
                                <input type="text" value="{{old('name',$order->name)}}" name="name" id="name" class="form-control">
                                @error('name')
                                    <span class="text-danger">
                                      {{$message}}
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <textarea name="email"  id="email" rows="8" class="form-control">{{old('email',$order->email)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="phone">Điện thoại</label>
                                <textarea name="phone"  id="phone" class="form-control">{{old('phone',$order->phone)}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="address">Địa chỉ</label>
                                <textarea name="address"  id="address" class="form-control">{{old('address',$order->address)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="note">Ghi chú</label>
                                <textarea name="note"  id="note" rows="8" class="form-control">{{old('note',$order->note)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="2"{{($order->status==2)?'selected':''}}>Chưa xuất bản</option>
                                    <option value="1"{{($order->status==1)?'selected':''}}>Xuất bản</option>
                                </select>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
         </form>
        </section>
@endsection
@section('title','Thêm liên hệ')