<div class="container my-5">
    <h3>SẢN PHẨM MỚI</h3>
    <div class="row">
      @foreach ($product_new as $product_item)
      <div class="col-md">
        <x-product-card :productitem="$product_item"/>
      </div>
      @endforeach
    </div>
  </div>