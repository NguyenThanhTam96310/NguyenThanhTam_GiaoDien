@extends('layouts.site')
@section('content')
    <x-main-menu/>
    <section class="ndt-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img-fluid w-50" src="{{asset("img/AIR-FORCE-1.jpg")}}" alt="detail">
                                </div>
                                <div class="col-md-12">
                                    <img class="img-fluid w-50" src="{{asset("img/AIR-FORCE-1.jpg")}}" alt="detail">
                                </div>
                                <div class="col-md-12">
                                    <img class="img-fluid w-50" src="{{asset("img/AIR-FORCE-1.jpg")}}" alt="detail">
                                </div>
                                <div class="col-md-12">
                                    <img class="img-fluid w-50" src="{{asset("img/AIR-FORCE-1.jpg")}}" alt="detail">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <img class="img-fluid w-100" src="{{asset("img/AIR-FORCE-1.jpg")}}" alt="detail">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="title">
                        <h1>{{$product->name}}</h1>
                    </div>
                    <div class="row">
                        @if($product->pricesale>0 && $product->pricesale<$product->price)
                          <div class="col-6">
                            <h2><strong class="text-danger ">{{$product->pricesale}}<sup>đ</sup></strong></h2>
                          </div>
                          <div class="col-6 text-end">
                            <del>{{$product->price}}<sup>đ</sup></del>
                          </div>
                        @else
                          <div class="col-6">
                           <h2> <strong class="text-danger ">{{$product->price}}<sup>đ</sup></strong></h2>
                          </div>
                        
                        @endif
                      </div>
                    <div class="menu-size">
                        <div class="row">
                            <div class="col-12">
                                <ul class="wapper-cb d-flex flex-wrap text-center ">
                                    <li class="cb px-2">
                                        <label for="radio-size-1" class="radio-size">
                                            <input type="radio" id="radio-size-1" name="radio" class="radio d-none">
                                            <div class="rd_in px-2">
                                                <h3>40</h3>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="cb px-2">
                                        <label for="radio-size-2" class="radio-size">
                                            <input type="radio" id="radio-size-2" name="radio" class="radio d-none">
                                            <div class="rd_in px-2">
                                                <h3>40.5</h3>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="cb px-2">
                                        <label for="radio-size-3" class="radio-size">
                                            <input type="radio" id="radio-size-3" name="radio" class="radio d-none">
                                            <div class="rd_in px-2">
                                                <h3>41</h3>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="cb px-2">
                                        <label for="radio-size-4" class="radio-size">
                                            <input type="radio" id="radio-size-4" name="radio" class="radio d-none">
                                            <div class="rd_in px-2">
                                                <h3>42</h3>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="cb px-2">
                                        <label for="radio-size-5" class="radio-size">
                                            <input type="radio" id="radio-size-5" name="radio" class="radio d-none">
                                            <div class="rd_in px-2">
                                                <h3>42.5</h3>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="cb px-2">
                                        <label for="radio-size-6" class="radio-size">
                                            <input type="radio" id="radio-size-6" name="radio" class="radio d-none">
                                            <div class="rd_in px-2">
                                                <h3>43</h3>
                                            </div>
                                        </label>
                                    </li>
                                    <li class="cb px-2">
                                        <label for="radio-size-7" class="radio-size">
                                            <input type="radio" id="radio-size-7" name="radio" class="radio d-none">
                                            <div class="rd_in px-2">
                                                <h3>44</h3>
                                            </div>
                                        </label>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Số lượng</label>
                        <input type="number" value="1" name="qty" id="qty" class="form-control" style="width:200px">
                    </div>
                    <div class="mb-3 d-flex ">
                        <button class="btn btn-danger text-center p-2 ">Mua ngay</button>
                        <button class="btn btn-success text-center p-2 mx-2">
                            <i class="fa fa-shopping-bag "></i> Thêm vào giỏ hàng
                        </button>
                    </div>
                    <div class="mb-3">
                        <span class="text">Hoặc đặt mua: </span>
                        <a href="" class="text-danger">0123456778</a>
                        <span>( Tư vấn miễn phí )</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="description py-5">
                    <p>
                        <a style="font-weight: bold;">{{$product->name}}</a>
                        <a> Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force
                            1
                            (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu
                            trình
                            làng.
                        </a>
                    </p>
                    <p>
                        <a> Thiết kế mẫu giày Nike Air Force 1 được xem là đôi giày mang tính cách mạng trong thế giới
                            sneaker, khi mà các nhà thiết kế kết hợp với các nhà khoa học cho ra mẫu giày có công nghệ
                            ‘Air’
                            – một túi khí ở gót chân để đệm hỗ trợ.
                        </a>
                    </p>
                    <p>

                        <a>
                            <img class="img-fluid"
                                src="{{asset("img/AIR-FORCE-1-NIKE-315122-111-KING-SHOES-SNEAKER-TPHCM-TANBINH-2.jpg")}}"
                                alt="detail"><br>
                            Cái tên ‘Air Force One’ được lấy ý tưởng từ chiếc chuyên cơ cùng tên chuyên dùng chở tổng
                            thống
                            Mỹ. AF1 có 3 hình thức chính: low (thấp) – mid (trung) – top (cao). Với các style Mid – Top,
                            chúng ta dễ dàng nhận thấy một cọng dây đeo có khoá hoặc dán tạo vẻ chắc chắn cho đôi giày
                            và có
                            thể dịch chuyển theo tuỳ phiên bản. Đây là một sự đặc biệt của đôi giày Nike Air Force 1 so
                            với
                            các đôi giày khác cùng thời. Một điểm nhận dạng khác của các Nike Air Force 1 là một huy
                            hiệu
                            nhỏ ở giữa dây giày được làm bằng thiếc (có phiên bản được làm bằng nhựa hoặc bạc) có khắc
                            dòng
                            chữ ‘AF1’.
                        </a>
                    </p>
                    <p>
                        <a> Nike Air Force 1 có hơn 1.700 bản phối với nhiều màu khác nhau và ngày càng tăng lên. Nhưng
                            2
                            màu cơ bản White – on – White và Black – on – Black vẫn là hai phiên bản thành công nhất với
                            số
                            lượng sản phẩm bán ra chạy nhất trong suốt nhiều thập kỷ qua. 12 triệu là số lượng giày được
                            bán
                            ra trong thời kì đỉnh cao của Nike Air Force 1 vào năm 2005. Con số đã phần nào thể hiện
                            được sự
                            phổ biến của nó trên toàn thế giới. Nike Air Force 1 thu về hơn 800 triệu USD mỗi năm cho
                            Nike,
                            sự tồn tại của đôi giày này trong hơn 25 năm qua cho ta thấy vị trí của nó trong trái tim
                            những
                            người đam mê ‘footwear’ cao đến mức nào.
                        </a>
                    </p>
                </div>
            </div>
            <div class="container my-5">
                <h3>SẢN PHẨM LIÊN QUAN</h3>
                <div class="row">
                    <!--shop tab product-->
                    <div class="row">
                        @foreach ($list_product as $productitem)
                        <div class="col-md-3 py-2">
                            <x-product-card :$productitem/>
                        </div>
                        @endforeach
                    </div>
                    <!--shop tab product end-->
                 </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
@section('title','Chi tiết')