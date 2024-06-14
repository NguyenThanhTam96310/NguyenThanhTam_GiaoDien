<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset("plugins/bootstrap/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/fontawesome/css/all.min.css")}}">
  <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <link rel="stylesheet" href="{{asset("css/styles.css")}}">
  @yield('header')
  @yield('product-list')
</head>
<body>
  <section class="ndt-header bg-black">
    <div class="container py-2">
      <div class="row">
        <div class="col-md-1">
          <a href="#">
            <img class="img-fluid w-100" src="img/logo.png.jpg" alt="logo">
          </a>
        </div>
        <div class=" container col-md-6 pt-4 pl-3">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm..." aria-label="Recipient's username"
              aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
          </div>
        </div>
        <div class="col-md-3 pt-2 text center">
          <div class="row text-center ">
            <div class="col-4 "><a href="#">
                <p class="p-0 m-0 fs-4 text-white"><i class="fa-regular fa-user"></i></p>
                <p class="p-0 m-0 text-white ">Đăng nhập</p>
              </a></div>
            <div class="col-4 "><a href="#">
                <p class="p-0 m-0 fs-4 text-white"><i class="fa-solid fa-cart-shopping"></i></p>
                <p class="p-0 m-0 text-white">Giỏ hàng</p>
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main>
    @yield('content')
  </main>
    <section class="ndt-footer bg-footer py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h6>CHÚNG TÔI LÀ AI ?</h6>
              <p class="text-secondary">Copyright@ 2021 Công ty TNHH thời trang Ego Wear
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat
              </p>
              <p class="text-secondary">Địa chỉ: 221 Chùa Bộc, Đống Đa, Hà Nội, Hà Nội
              </p>
              <p class="text-secondary"> Điện thoại: 1900 6750 - Email: support@sapo.vn</p>
              <h6>MẠNG XÃ HỘI</h6>
              <div>
                <span class="box border border-danger">
                  <i class="fa-brands fa-facebook"></i>
                </span>
                <span class="box border border-danger">
                  <i class="fa-brands fa-instagram"></i>
                </span>
                <span class="box border border-danger">
                  <i class="fa-brands fa-google"></i>
                </span>
                <span class="box border border-danger">
                  <i class="fa-brands fa-youtube"></i>
                </span>
              </div>
            </div>
            <div class="col-md">
              <h6>CHÍNH SÁCH</h6>
              <ul class="list">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Xu hướng</a></li>
                <li><a href="#">Trang phục</a></li>
                <li><a href="#">Phụ kiện</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Câu hỏi</a></li>
                <li><a href="#">Liên hệ</a></li>
              </ul>
            </div>
            <div class="col-md">
              <h6>KHU BÁN HÀNG</h6>
              <ul class="list">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Xu hướng</a></li>
                <li><a href="#">Trang phục</a></li>
                <li><a href="#">Phụ kiện</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Câu hỏi</a></li>
                <li><a href="#">Liên hệ</a></li>
              </ul>
            </div>
            <div class="col-md">
              <h6>HỖ TRỢ CHUNG</h6>
              <ul class="list">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Xu hướng</a></li>
                <li><a href="#">Trang phục</a></li>
                <li><a href="#">Phụ kiện</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Câu hỏi</a></li>
                <li><a href="#">Liên hệ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="ndt-copyright bg-footer">
        <div class="container border-top py-4">
          <div class="row">
            <div class="col-6">
              <p class="text-secondary">Bản quyền thuộc về <strong class="text-white">Ego Creative </strong>Cung cấp bởi
                <strong class="text-white">Sapo</strong>
              </p>
            </div>
            <div class="col-6 text-right">
              <ul class="nav">
                <li>
                  <a href="#"> Trang chủ</a>
                </li>
                <li> <a href="#">Sản phẩm</a></li>
                <li> <a href="#">Xu hướng</a></li>
                <li> <a href="#">Trang phục</a></li>
                <li> <a href="#">Phụ kiện</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      @yield('footer')
</body>
</html>

