<div class="slide">
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        @foreach ($list_slider as $row_slider)
            @if ($loop->first)
              <div class="carousel-item active">
                <img src="{{asset('./images/banners/'.$row_slider->image)}}" class="d-block w-100" alt="{{$row_slider->image}}">
              </div>
            @else
              <div class="carousel-item active">
                <img src="{{asset('./images/banners/'.$row_slider->image)}}" class="d-block w-100" alt="{{$row_slider->image}}">
              </div>>
            @endif
        @endforeach
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
  </div>