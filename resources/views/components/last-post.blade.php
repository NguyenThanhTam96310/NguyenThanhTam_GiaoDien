<div class="container border-top py-4 bg-danger text-center text-white">
    <div class="row">

      <h5>HOT: Sale 50% cho toàn bộ đơn hàng có giá trị từ 2 triệu, miễn phí ship toàn quốc</h5>

    </div>
  </div>

  <div class="container mb-4">
    <h3 class="text-center py-3">TIN TỨC MỚI NHẤT</h3>
    <div class="row">
      @foreach ($post_new as $post)
      <div class="col-md-4">
        <img class="img-fluid w-100" src="{{asset("images/posts/".$post->image)}}" alt="{{$post->image}}">
        <h6>15/08/2021 - bởi: Ego Creative</h6>
        <h4>
            <a href="/detail/{{$post->slug}}">{{$post->title}}</a>
        </h4>
        <p class="text-black-50 bg-white">
            {{$post->detail}}
        </p>
      </div>
      @endforeach
      {{-- <div class="col-md-6">
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
      </div> --}}
    </div>
</section>