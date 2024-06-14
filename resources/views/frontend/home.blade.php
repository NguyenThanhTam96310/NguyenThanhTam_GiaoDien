@extends('layouts.site')
@section('content')
<section class="ndt-content">
  <x-main-menu/>
  <x-slide/>
    <div class="container mb-4 py-3">
      <div class="row">
        <div class="col-md-3">
          <i class="fs-3 fa-solid fa-truck-fast"></i>
          <h6>Miễn phí giao hàng</h6>
          <p class="text-muted">Miễn phí ship với đơn hàng > 498K</p>
        </div>
        <div class="col-md-3">
          <i class="fs-3 fa-solid fa-wallet"></i>
          <h6>Thanh toán COD
          </h6>
          <p class="text-muted">Thanh toán khi nhận hàng (COD)</p>
        </div>
        <div class="col-md-3">
          <i class="fs-3 fa-regular fa-gem"></i>
          <h6>Khách hàng VIP
          </h6>
          <p class="text-muted">Ưu đãi dành cho khách hàng VIP</p>
        </div>
        <div class="col-md-3">
          <i class="fs-3 fa-solid fa-clipboard-list"></i>
          <h6>Hỗ trợ bảo hành
          </h6>
          <p class="text-muted">Đổi, sửa đồ tại tất cả store</p>
        </div>
      </div>
    </div>
  <x-flash-sale/>
  <x-product-new/>
  <x-product-category-home/>
  <x-last-post/>
@endsection
@section('title','Trang chủ')