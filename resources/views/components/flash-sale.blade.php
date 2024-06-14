<div class="container my-5">
    <h3>SIÊU SALE</h3>
    <div class="row">
      @foreach ($product_sale as $product_item)
      <div class="col-md">
        <x-product-card :productitem="$product_item"/>
      </div>
      @endforeach
    </div>
  </div>