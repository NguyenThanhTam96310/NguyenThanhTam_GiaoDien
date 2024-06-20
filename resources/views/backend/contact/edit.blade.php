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
            <form action="{{route('admin.contact.update',['id'=>$contact->id])}}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('put')
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a class="btn btn-sm btn-info" href="{{route('admin.contact.index')}}">
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
                                <label for="name">Tên liên hệ</label>
                                <input type="text" value="{{old('name',$contact->name)}}" name="name" id="name" class="form-control">
                                @error('name')
                                    <span class="text-danger">
                                      {{$message}}
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <textarea name="email"  id="email" rows="8" class="form-control">{{old('email',$contact->email)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="phone">Điện thoại</label>
                                <textarea name="phone"  id="phone" class="form-control">{{old('phone',$contact->phone)}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="title">Chủ đề</label>
                                <select name="title" id="title" class="form-control">
                                    {!! $htmltopic !!}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="content">Nội dung</label>
                                <textarea name="content"  id="content" rows="8" class="form-control">{{old('content',$contact->content)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="reply_id">Reply_id</label>
                                <textarea name="reply_id"  id="reply_id"  class="form-control">{{old('reply_id',$contact->reply_id)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="2"{{($contact->status==2)?'selected':''}}>Chưa xuất bản</option>
                                    <option value="1"{{($contact->status==1)?'selected':''}}>Xuất bản</option>
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