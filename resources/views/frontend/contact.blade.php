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
                        <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm..."
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
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
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                <a class="nav-link disabled" aria-disabled="true"><strong>Liên hệ</strong></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </section>
    <div class="contact-box-main">
        <div class="container">
            <div class="row mb-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1385.485256227442!2d106.77438356690605!3d10.830886558802458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752701a34a5d5f%3A0x30056b2fdf668565!2zQ2FvIMSQ4bqzbmcgQ8O0bmcgVGjGsMahbmcgVFAuSENN!5e0!3m2!1svi!2s!4v1715587205511!5m2!1svi!2s"
                    width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>LIÊN LẠC</h2>
                        <p>Sự góp ý của quý khách sẽ giúp chúng tôi hoàn thiện hơn. Cảm ơn rất nhiều.</p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nhập tên khách hàng" required
                                            data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12  mb-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nhập Email" id="email" class="form-control"
                                            name="name" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12  mb-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="name"
                                            placeholder="Tiêu đề" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12  mb-2">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Nội dung" rows="4"
                                            data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-end m-2">
                                        <button class="btn btn-success" id="submit" type="submit">Gửi phản hồi</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>THÔNG TIN LIÊN HỆ</h2>
                        <p>
                            Chúng tôi xin chân thành cảm ơn sự ủng hộ và tin tưởng của Quý khách hàng dành cho Thành Tâm
                            Shop
                            Food. Sự hài lòng của bạn là nguồn động viên lớn lao và là động lực quan trọng giúp chúng
                            tôi không ngừng hoàn thiện và phát triển. Chúng tôi hứa sẽ tiếp tục nỗ lực không ngừng, mang
                            đến những trải nghiệm ẩm thực đáng nhớ và dịch vụ tốt nhất cho mỗi khách hàng. Xin chân
                            thành cảm ơn bạn đã luôn đồng hành cùng Thành Tâm Shop! </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Địa chỉ: 20 Tăng Nhơn Phú-Phước Long B-
                                    TP.Hồ Chí Minh </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Điện thoại: <a href="tel:+1-888705770">+1-888 705
                                        770</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a
                                        href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ndt-footer bg-footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h6>CHÚNG TÔI LÀ AI ?</h6>
                    <p class="text-secondary">Copyright@ 2021 Công ty TNHH thời trang Ego Wear
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex
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
                    <p class="text-secondary">Bản quyền thuộc về <strong class="text-white">Ego Creative
                        </strong>Cung cấp bởi
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