@extends('frontend.layout.index')
@section('content')
	<div class="col-xs-12 col-md-9"> 
        <!-- main -->
        <div class="product-detail" itemscope="" itemtype="http://schema.org/Product">
          <meta itemprop="url" content="//dktstore-theme.bizwebvietnam.net/microsoft-lumia-950-xl-mau-den">
          <meta itemprop="image" content="public/frontend/images/msc.jpg?v=1469340617533">
          <meta itemprop="shop-currency" content="VND">
          <div class="top">
            <div class="row">
              <div class="col-xs-12 col-md-6 product-image">
                <div class="featured-image"> <img src="{{$product->image}}" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="{{$product->image}}" alt="MICROSOFT LUMIA 950 XL"> </div>
              </div>
              <div class="col-xs-12 col-md-6 info">
                <h1 itemprop="name">{{$product->name}}</h1>
                <p class="sku">Mã sản phẩm:&nbsp; <span></span></p>
                <p class="vendor">Nhà sản xuất:&nbsp; <span>MICROSOFT</span></p>
                <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price">@php echo number_format($product->price)." ₫";@endphp </span> </span> </p>
                <p class="desc rte"> {{$product->desc}}</p>
                <form action="/cart/add" method="post" enctype="multipart/form-data" class="product-form">
                  <select id="product-selectors" name="variantId" style="display:none">
                    <option selected="selected" value="1853207">Đen - 15.990.000₫</option>
                    <option value="1853286">Trắng - 14.500.000₫</option>
                  </select>
                  <div class="quantity">
                    <label>Số lượng</label>
                    <input type="number" id="qty" name="quantity" value="1" min="1" class="input-control" required="Không thể để trống">
                  </div>
                  <div class="action-btn">
                    <button class="button product-add-to-cart">Cho vào giỏ hàng</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="middle">
            <ul class="list-unstyled navtabs">
              <li><a href="#tab1" class="head-tabs head-tab1 active" data-src=".head-tab1">Chi tiết sản phẩm</a></li>
            </ul>
            <div class="tab-container"> 
              <!-- chi tiet -->
              <div id="tab1" class="content-tabs">
                <div class="rte">
                  {{$product->product_detail}}
                </div>
              </div>
              <!-- chi tiet --> 
            </div>
          </div>
        </div>
        
        <!-- end main --> 
    </div>
@endsection
