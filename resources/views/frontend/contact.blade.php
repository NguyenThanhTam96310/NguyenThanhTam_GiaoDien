@extends('layouts.site')
@section('content')
    


    
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
@endsection

@section('title')
    Liên hệ
@endsection