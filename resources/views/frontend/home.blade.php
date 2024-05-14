<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NguyenThanhTam_GiaoDien</title>
  <link rel="stylesheet" href="{{asset("plugins/bootstrap/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/fontawesome/css/all.min.css")}}">
  <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <link rel="stylesheet" href="{{asset("css/styles.css")}}">
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
  <section class="ndt-menu bg-body-tertiary">
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" d-block d-md-none><strong>Trang chủ</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <strong>Nike</strong>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Nam</a></li>
                  <li><a class="dropdown-item" href="#">Nữ</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <strong>Adidas</strong>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Nam</a></li>
                  <li><a class="dropdown-item" href="#">Nữ</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <strong>Xu hướng</strong>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Sản phẩm nổi bật</a></li>
                  <li><a class="dropdown-item" href="#">Sản phẩm khuyến mãi</a></li>
                  <li><a class="dropdown-item" href="#">Trend mới nhất</a></li>
                  <li><a class="dropdown-item" href="#">Phong cách lạ</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Xem tất cả</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <strong>Tin tức</strong>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Tin xu hướng</a></li>
                  <li><a class="dropdown-item" href="#">Tin khuyến mãi</a></li>
                  <li><a class="dropdown-item" href="#">Tin quà tặng</a></li>
                  <li><a class="dropdown-item" href="#">Tin mẹo vặt</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"><strong>Câu hỏi</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true" href="product_detail.html">Liên
                    hệ</strong></a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </section>
  <section class="ndt-content">
    <div class="slide">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/banner1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/banner2.png" class="d-block w-100" alt="...">
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
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
      <div class="container my-5">
        <h3>MẪU MỚI VỀ</h3>
        <div class="row">
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid h-100" src="img/giay-nike-quest-4-womens-road-running.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE QUEST 4</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">3.399.000<sup>đ</sup></strong>
                  </div>
                  <div class="col-6 text-end">
                    <del>4.460.000<sup>đ</sup></del>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Thêm vào giỏ</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid" src="img/giay-nike-air-max-90-se.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE AIR MAX 90 SE</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">3.600.000<sup>đ</sup></strong>
                  </div>
                  <div class="col-6 text-end">
                    <del>5.500.000<sup>đ</sup></del>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Mua ngay</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid" src="img/giay-nike-air-max-excee.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE AIR MAX EXCEE</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">3.060.000<sup>đ</sup></strong>
                  </div>
                  <div class="col-6 text-end">
                    <del>4.060.000<sup>đ</sup></del>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Mua ngay</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid" src="img/giay-nike-revolution-6-running.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE REVOLUTION 6</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">1.800.000<sup>đ</sup></strong>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Mua ngay</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="container my-5">
        <h3>TOP BÁN CHẠY</h3>
        <div class="row">
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid h-100" src="img/giay-nike-quest-4-womens-road-running.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE QUEST 4</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">3.399.000<sup>đ</sup></strong>
                  </div>
                  <div class="col-6 text-end">
                    <del>4.460.000<sup>đ</sup></del>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Thêm vào giỏ</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid" src="img/giay-nike-air-max-90-se.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE AIR MAX 90 SE</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">3.600.000<sup>đ</sup></strong>
                  </div>
                  <div class="col-6 text-end">
                    <del>5.500.000<sup>đ</sup></del>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Mua ngay</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid" src="img/giay-nike-air-max-excee.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE AIR MAX EXCEE</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">3.060.000<sup>đ</sup></strong>
                  </div>
                  <div class="col-6 text-end">
                    <del>4.060.000<sup>đ</sup></del>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Mua ngay</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid" src="img/giay-nike-revolution-6-running.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE REVOLUTION 6</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">1.800.000<sup>đ</sup></strong>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Mua ngay</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <div class="row">
          <div class="col-md-6">
            <img class="img-fluid w-100" src="image/b1.webp" alt="">
          </div>
          <div class="col-md-6">
            <div class="row mb-2">
              <div class="col-6">
                <img class="img-fluid w-100" src="image/b2.webp" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid w-100" src="image/b3.webp" alt="">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-12 py-3">
                <img class="img-fluid w-100" src="image/b4.webp" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container my-5">
        <h3>THƯƠNG HIỆU</h3>
        <div class="row">
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid " src="img/giay-nike-quest-4-womens-road-running.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE QUEST 4</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">3.399.000<sup>đ</sup></strong>
                  </div>
                  <div class="col-6 text-end">
                    <del>4.460.000<sup>đ</sup></del>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Thêm vào giỏ</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid" src="img/giay-nike-air-max-90-se.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE AIR MAX 90 SE</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">3.600.000<sup>đ</sup></strong>
                  </div>
                  <div class="col-6 text-end">
                    <del>5.500.000<sup>đ</sup></del>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Mua ngay</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid" src="img/giay-nike-air-max-excee.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE AIR MAX EXCEE</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">3.060.000<sup>đ</sup></strong>
                  </div>
                  <div class="col-6 text-end">
                    <del>4.060.000<sup>đ</sup></del>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Mua ngay</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="product-item">
              <div class="product-image">
                <img class="img-fluid" src="img/giay-nike-revolution-6-running.jpeg" alt="">
              </div>
              <div class="product-name">
                <h5 class="fs-6 py-1">NIKE REVOLUTION 6</h5>
              </div>
              <div class="product-price">
                <div class="row">
                  <div class="col-6">
                    <strong class="text-danger fs-5">1.800.000<sup>đ</sup></strong>
                  </div>
                </div>
              </div>
              <div class="product-cart-hearth-eye my-2">
                <div class="row">
                  <div class="col-8">
                    <a class="btn btn-sm btn-success form-control">Mua ngay</a>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-2">
                    <button class="btn btn-sm btn-info">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
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
      </div>
  </section>
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
</body>

</html>