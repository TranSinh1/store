@extends('frontend.layout.index')
@section('content')
<?php 
  $qty = 0;
  foreach ($cart as $val) {
    if ($val['id'] == $product['id']) {
      $qty = $val['quantity'];
    }
  }
 ?>
	<div class="col-xs-12 col-md-9"> 
        <!-- main -->
        <div class="product-detail" itemscope="" itemtype="http://schema.org/Product">
          <meta itemprop="url" content="//dktstore-theme.bizwebvietnam.net/microsoft-lumia-950-xl-mau-den">
          <meta itemprop="image" content="public/frontend/images/msc.jpg?v=1469340617533">
          <meta itemprop="shop-currency" content="VND">
          <div class="top">
            <div class="row">
              <div class="col-xs-12 col-md-6 product-image">
                <div class="featured-image"> <img src="{{asset($product->image)}}" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="{{$product->image}}" alt="{{$product->name}}"> </div>
              </div>
              <div class="col-xs-12 col-md-6 info">
                <h1 itemprop="name">{{$product->name}}</h1>
              <!--   <p class="sku">Mã sản phẩm:&nbsp; <span></span></p>
                <p class="vendor">Nhà sản xuất:&nbsp; <span>MICROSOFT</span></p> -->
                <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price">@php echo number_format($product->price)." ₫";@endphp </span> </span> </p>
                <p class="desc rte"> {!!$product->desc!!}</p>
                <!-- <form action="{{route('cart.add')}}"  method="post" enctype="multipart/form-data" class="product-form">
                @csrf -->
                  <select id="product-selectors" name="variantId" style="display:none">
                    <option selected="selected" value="1853207">Đen - 15.990.000₫</option>
                    <option value="1853286">Trắng - 14.500.000₫</option>
                  </select>
                  <div class="quantity">
                    <label>Số lượng</label>
                        <input type="number" id="qty" name="quantity" value="{{$qty ?? 1}}" min="1" onkeydown="" onkeyup="number()" class="input-control" required="Không thể để trống" >

                    
                  </div>
                  <div class="action-btn">
                    <button class="button " onclick="add_product_cart({{$product->id}})" id="add_product_{{$product->id}}" item_id={{$product->id}}  >Cho vào giỏ hàng</button>
                  </div>
              <!--   </form> -->
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
                  {!!$product->product_detail!!}
                </div>
              </div>
              <!-- chi tiet --> 
            </div>
          </div>
        </div>
        
        <!-- end main --> 
    </div>
@endsection
@section('script')
<script type="text/javascript">
  function number() {
    $(document).ready(function() {
      var number = parseInt($('#qty').val())
      if(number<1 || number>10) {
        alert('Chỉ được mua nhiều nhất 10 cái trong 1 sản phẩm')
        $('#qty').val({{$qty}})
      }
    });
  }
  function add_product_cart(id) {
    $(document).ready(function() {
      var quantity_product = $('#qty').val()
      var itemId = $(this).attr('item_id');
      $.ajax({
        url:"{{route('cart.add')}}",
        method:'POST',
        data: {
          id:id,
          qty_product:quantity_product,
          _token: '{{csrf_token()}}'
        },
        success:function(rp) {
                    var totalPrice = 0;
                    var Url = "product-detail/";
                    var cartDetail = ``;
                    var totalItem = 0;
                    for(var i = 0; i < rp.data.length; i++){
                        var cItem = rp.data[i];
                        totalItem += parseInt(rp.data[i].quantity);
                        totalPrice += (rp.data[i].quantity*rp.data[i].price);
                        cartDetail += `<li class="clearfix" id="item_${cItem.id}">
                                        <div class="image"> <a href="${Url}${cItem.id}"> <img alt="Sản phẩm 2" src="${cItem.image}" title="Sản phẩm 2" class="img-responsive"> </a> </div>
                                        <div class="info" id="item-cart">
                                          <h3><a href="${Url}${cItem.id}">${cItem.name}</a></h3>
                                          <p>${cItem.quantity} x ${cItem.price}</p>
                                        </div>
                                        <div> <a href="javascript:;"> <i  class="fa fa-times" id="del-product-${cItem.id}" onclick="del_product(${cItem.id})" item_id=${cItem.id}"></i></a> </div>
                                      </li>`;
                    }
                    console.log(totalItem)
                    console.log(quantity_product)
                    $('#mini-cart').text(totalItem)
                    //$('#qty').text(rp.qty)
                    $('.total-price').text(totalPrice+"₫");
                    $('.list-cart-mini').empty();
                    $('.list-cart-mini').append(cartDetail);
          console.log(rp)
        }
      })
    })
  }
</script>
@endsection