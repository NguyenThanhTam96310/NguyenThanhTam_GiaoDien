@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Cập Nhật menu</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">menu</li>
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
            href="{{route('admin.category.index')}}">
            <i class="fas fa-arrow-left"></i>
              <strong>Về danh sách</strong></a>
          </div>
        </div> 
      </div>
      <div class="card-body">
        <form action="{{ route('admin.menu.update', ['id' => $menu->id]) }}" method="post">
          @csrf
          @method('put')
              <section class="content">
                  <div class="card">
                      <div class="card-body p-2">
                          <div class="row">
                              <div class="col-md-9">
                                  <div class="mb-3">
                                      <label for="name"><strong>Tên menu</strong></label>
                                      <input value="{{ old('name', $menu->name) }}" type="text" name="name"
                                          id="name" class="form-control" />
                                      @error('name')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="mb-3">
                                      <label for="link"><strong>Liên kết</strong></label>
                                      <input value="{{ old('link', $menu->link) }}" type="text" name="link"
                                          id="link" class="form-control" />
                                      @error('link')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="mb-3">
                                      <label for="position"><strong>Vị trí</strong></label>
                                      <select name="position" id="position" class="form-control">
                                          <option value="mainmenu"
                                              {{ old('position', $menu->position) == 'mainmenu' ? 'selected' : '' }}>
                                              Main Menu</option>
                                          <option value="footermenu"
                                              {{ old('position', $menu->position) == 'footermenu' ? 'selected' : '' }}>
                                              Footer Menu</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="mb-3">
                                      <label for="parent_id"><strong>Cấp cha</strong></label>
                                      <select name="parent_id" id="parent_id" class="form-control">
                                          <option value="0">None</option>
                                          {!! $htmlparentid !!}
                                      </select>
                                      @error('parent_id')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="mb-3">
                                      <label for="type"><strong>Kiểu menu</strong></label>
                                      <select name="type" id="type" class="form-control">
                                          <option value="">None</option>
                                          {!! $htmltype !!}
                                      </select>
                                      @error('type')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="mb-3">
                                      <label for="sort_order"><strong>Sắp xếp</strong></label>
                                      <select name="sort_order" id="sort_order" class="form-control">
                                          <option value="">None</option>
                                          {!! $htmlsortorder !!}
                                      </select>
                                      @error('sort_order')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="mb-3">
                                      <label for="status"><strong>Trạng thái</strong></label>
                                      <select name="status" id="status" class="form-control">
                                          <option value="1" {{ $menu->status == 1 ? 'selected' : '' }}>
                                              Xuất bản</option>
                                          <option value="2" {{ $menu->status == 2 ? 'selected' : '' }}>
                                              Chưa xuất bản</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="mb-3">
                            <button type="submit" name="update" class="btn btn-success">Cập nhật</button>
                        </div>
                      </div>
                  </div>
                </section>
      </form>
      </div>
    </div>
  </section>
@endsection
@section('title','Cập nhật menu')