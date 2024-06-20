<div class="product-item">
    <figure class="product-image w-100 overflow-hidden">
      <a href="{{route('side.product.detail',['slug'=>$product->slug])}}">
        <img 
      class="img-fluid" src="{{asset('img/giay-nike-quest-4-womens-road-running.jpeg')}}" alt="{{$product->name}}">
      </a>
    </figure>
    <div class="product-name">
      <h5 class="fs-6 py-1">
        <a class="text-black" href="{{route('side.product.detail',['slug'=>$product->slug])}}">
          {{$product->name}}
        </a>
        </h5>
    </div>    
    <div class="product-price">
      <div class="row">
        @if($product->pricesale>0 && $product->pricesale<$product->price)
          <div class="col-6">
            <strong class="text-danger fs-5">{{$product->pricesale}}<sup>đ</sup></strong>
          </div>
          <div class="col-6 text-end">
            <del>{{$product->price}}<sup>đ</sup></del>
          </div>
        @else
          <div class="col-6">
            <strong class="text-danger fs-5">{{$product->price}}<sup>đ</sup></strong>
          </div>
        
        @endif
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