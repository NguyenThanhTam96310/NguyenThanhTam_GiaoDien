@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản Lý Thương Hiệu</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Thương hiệu</li>
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
            <a class="btn btn-sm btn-danger "
            href="{{route('admin.brand.trash')}}">
            <i class="fas fa-trash"></i>
              <strong>Thùng rác</strong></a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-4">
              <form action="{{route('admin.brand.store')}}" method="post" enctype="multipart/form-data">
                @csrf  
                <div class="mb-3">
                      <label for="name">Tên thương hiệu</label>
                      <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control">
                      @error('name')
                          <span class="text-danger">
                            {{$message}}
                          </span>
                      @enderror
                  </div>
                  <div class="mb-3">
                      <label for="description">Mô tả</label>
                      <textarea  name="description" id="description" class="form-control"
                      value="{{old('description')}}"></textarea>
                  </div>
                  <div class="mb-3">
                      <label for="parent_id">Danh mục cha</label>
                      <select  name="parent_id" id="parent_id" class="form-control">
                          <option value="0">None</option>
                          {!! $htmlparentid !!}
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="sort_order">Sắp xếp</label>
                      <select name="sort_order" id="sort_order" class="form-control">
                          <option value="0">None</option>
                          {!! $htmlsortorder !!}
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="image">Hình</label>
                      <input type="file" name="image" id="image" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="status">Trạng thái</label>
                      <select name="status" id="status" class="form-control">
                          <option value="2">Chưa xuất bản</option>
                          <option value="1">Xuất bản</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <button type="submit" name="create" class="btn btn-success">Thêm danh
                          mục</button>
                  </div>
              </form>
            </div>
            <div class="col-md-8">
              <table class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th style="width:30px" class="text-center">#</th>
                          <th style="width:90px" class="text-center">Hình ảnh</th>
                          <th>Tên thương hiệu</th>
                          <th>Slug</th>
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
                        <td class="text-center">
                          <img src="{{asset('images/brands/'.$row->image)}}" class="img-fluid" alt="{{$row->name}}">
                        </td>
                        <td>
                          {{$row->name}}
                        </td>
                        <td>
                          {{$row->slug}}
                        </td>
                        @php
                           $args=['id'=>$row->id];
                        @endphp
                        <td class="text-center">
                            @if ($row->status==1)
                              <a href="{{route('admin.brand.status',$args)}}" class="btn btn-sm btn-success">
                                <i class="fas fa-toggle-on"></i>
                            </a>
                            
                            @else
                                <a href="{{route('admin.brand.status',$args)}}" class="btn btn-sm btn-danger">
                                  <i class="fas fa-toggle-off"></i>
                              </a>
                            @endif
                                
                            <a href="{{route('admin.brand.show',$args)}}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{route('admin.brand.edit',$args)}}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{route('admin.brand.delete',$args)}}" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                        <td>{{$row->id}}</td>
                    </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('title','Thương hiệu')