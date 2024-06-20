@extends('layouts.site')
@section('content')
<section class="ndt-content">
    <div class="slide">
        <x-main-menu/>
        <div class="container my-5">
            <h3>TẤT CẢ SẢN PHẨM</h3>
             <!--pos home section-->
             <div class=" pos_home_section">
                <div class="row pos_home">
                        <div class="col-lg-3 col-md-12">
                           <!--layere categorie"-->
                              <div class="sidebar_widget shop_c">
                                    <div class="categorie__titile">
                                        <h4>Categories</h4>
                                    </div>
                                    <div class="layere_categorie">
                                        <ul>
                                            <li>
                                                <input id="acces" type="checkbox">
                                                <label for="acces">Accessories<span>(1)</span></label>
                                            </li>
                                            <li>
                                                <input id="dress" type="checkbox">
                                                <label for="dress">Dresses <span>(2)</span></label>
                                            </li>
                                            <li>
                                                <input id="tops" type="checkbox">
                                                <label for="tops">Tops<span>(3)</span></label>
                                            </li>
                                            <li>
                                                <input id="bag" type="checkbox">
                                                <label for="bag">HandBags<span>(4)</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <!--layere categorie end-->

                            <!--color area start-->  
                            <div class="sidebar_widget color">
                                <h2>Color</h2>
                                 <div class="widget_color">
                                    <ul>

                                        <li><a href="#">Black <span>(10)</span></a></li>

                                        <li><a href="#">Orange <span>(12)</span></a></li>

                                        <li> <a href="#">Blue <span>(14)</span></a></li>

                                        <li><a href="#">Yellow <span>(15)</span></a></li>

                                        <li><a href="#">pink <span>(16)</span></a></li>

                                        <li><a href="#">green <span>(11)</span></a></li>

                                    </ul>
                                </div>
                            </div>                 
                            <!--color area end--> 

                            <!--price slider start-->                                     
                            <div class="sidebar_widget price">
                                <h2>Price</h2>
                                <div class="ca_search_filters">

                                    <input type="text" name="text" id="amount">  
                                    <div id="slider-range"></div> 
                                </div>
                            </div>                                                       
                            <!--price slider end-->
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <!--banner slider start-->
                            {{-- <div class="banner_slider mb-35">
                                <img src="assets\img\banner\bannner10.jpg" alt="">
                            </div>  --}}
                            <!--banner slider start-->

                            <!--shop toolbar start-->
                            <div class="shop_toolbar mb-35">
                               
                                <div class="list_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="page_amount">
                                    <p>Showing 1–9 of 21 results</p>
                                </div>
                                
                                <div class="select_option">
                                    <form action="#">
                                        <label>Sort By</label>
                                        <select name="orderby" id="short">
                                            <option selected="" value="1">Position</option>
                                            <option value="1">Price: Lowest</option>
                                            <option value="1">Price: Highest</option>
                                            <option value="1">Product Name:Z</option>
                                            <option value="1">Sort by price:low</option>
                                            <option value="1">Product Name: Z</option>
                                            <option value="1">In stock</option>
                                            <option value="1">Product Name: A</option>
                                            <option value="1">In stock</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <!--shop toolbar end-->

                            <!--shop tab product-->
                            <div class="row">
                                @foreach ($list_product as $productitem)
                                <div class="col-md-4 py-2">
                                    <x-product-card :$productitem/>
                                  </div>
                                @endforeach
                            </div>
                            <!--shop tab product end-->

                            <!--pagination style start--> 
                           <div class="row mt-5">
                            <div class="col-12 d-flex justify-content-center">
                                {{ $list_product->links() }}
                            </div>
                           </div>
                            <!--pagination style end--> 
                        </div>
                    </div>  
            </div>
            <!--pos home section end-->
        </div>
</section>
@endsection

@section('title')
    Sản phẩm
@endsection
@section('product-list')
<link rel="stylesheet" href="{{asset("css/product.css")}}">
@endsection