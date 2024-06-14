<div class="container my-5">
    <h3>THƯƠNG HIỆU</h3>
    <div class="row">
      @foreach ($product_category as $product_item)
      <div class="col-md">
        <x-product-card :productitem="$product_item"/>
      </div>
      @endforeach
    </div>
  </div>