@extends('layouts.site')
@section('content')
<section class="ndt-content">
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
    
    <div class="container border-top py-4 bg-danger text-center text-white">
      <div class="row">

        <h5>HOT: Sale 50% cho toàn bộ đơn hàng có giá trị từ 2 triệu, miễn phí ship toàn quốc</h5>

      </div>
    </div>

    <div class="container mb-4">
      <h3 class="text-center py-3">TIN TỨC MỚI NHẤT</h3>
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid w-100" src="img/classichoodie-post.jpg.webp" alt="">
          <h6>15/08/2021 - bởi: Ego Creative</h6>
          <h4>Đoạn Lorem Ipsum chuẩn, được sử dụng từ những năm 1500</h4>
          <p class="text-black-50 bg-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris
            nisi ut aliquip ex ea commodo consequat.
          </p>

        </div>
        <div class="col-md-6">
          <div class="row mb-2">
            <div class="col-5">
              <img class="img-fluid w-100" src="img/post-july-3.png.webp" alt="">
            </div>
            <div class="col-7">
              <h7>15/08/2021 - bởi: Ego Creative</h7>
              <h5>Đoạn Lorem Ipsum chuẩn, được sử dụng từ những năm 1500</h5>
              <p class="text-black-50 bg-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>

          <div class="row mb-2">
            <div class="col-5">
              <img class="img-fluid w-100" src="img/post-july-3.png.webp" alt="">
            </div>
            <div class="col-7">
              <h7>15/08/2021 - bởi: Ego Creative</h7>
              <h5>Đoạn Lorem Ipsum chuẩn, được sử dụng từ những năm 1500</h5>
              <p class="text-black-50 bg-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-5">
              <img class="img-fluid w-100" src="img/post-july-3.png.webp" alt="">
            </div>
            <div class="col-7">
              <h7>15/08/2021 - bởi: Ego Creative</h7>
              <h5>Đoạn Lorem Ipsum chuẩn, được sử dụng từ những năm 1500</h5>
              <p class="text-black-50 bg-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection
@section('title','Trang chủ')