@extends('frontend.layout.index')
@section('content')
<div class="col-xs-12 col-md-9"> 
        <!-- main -->
  <div class="special-collection">
    <div class="tabs-container">
      <div class="clearfix">
        <h2>Sản phẩm mới</h2>
      </div>
    </div>
    <div class="tabs-content row">
      <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
        <div class="clearfix"> 
          @foreach ($new_product as $new_pro)
          <!-- box product -->
          <div class="col-xs-6 col-md-3 col-sm-6 ">
            <div class="product-grid" id="product-1168979">
              <div class="image"> <a href="{{route('product', ['id' => $new_pro->id])}}"><div style="height: 240px; overflow: hidden;"><img src="{{$new_pro->image}}" title="{{$new_pro->name}}" alt="{{$new_pro->name}}" class="img-responsive"></div></a> </div>
              <div class="info">
                <h3 class="name"><a href="{{route('product', ['id' => $new_pro->id])}}">{{$new_pro->name}}</a></h3>
                <p class="price-box"> <span class="special-price"> <span class="price product-price"><?php echo number_format($new_pro->price)." ₫"; ?></span> </span> </p>
                <div class="action-btn">
                <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                @csrf
                  <a href="javascript:;" class="add_to_cart_btn button " item_id={{$new_pro->id}} >Mua hàng</a>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!-- end box product --> 
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper-tab-collections" style="margin-top:0px;">
    <div class="tabs-container">
      <ul class="list-unstyled">
        <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
          <h2>Sản phẩm nổi bật</h2>
          </a></li>
      </ul>
    </div>
    <div class="tabs-content row">
      <div id="content-taba4" class="content-tab content-tab-proindex"> 
        @foreach ($hot_product as $hot_pro)
          <!-- box product -->
        <div class="col-xs-6 col-sm-4 col-md-3 ">
          <div class="product-grid product-loop" id="product-1142079">
            <div class="image"> <a href="{{route('product', ['id' => $hot_pro->id])}}"><div style="height: 240px; overflow: hidden;"><img src="{{$hot_pro->image}}" title="{{$hot_pro->name}}" alt="{{$hot_pro->name}}" class="img-responsive"></div></a> </div>
            <div class="info">
              <h3 class="name"><a href="product/detail/{{$hot_pro->id}}">{{$hot_pro->name}}</a></h3>
              <p class="price-box"> <span class="special-price"> <span class="price product-price"><?php echo number_format($hot_pro->price)." ₫" ?> </span> </span> </p>
              <div class="action-btn">
              <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142079">
              @csrf
                <input type="hidden" name="variantId" value="1777262" />
                <a href="javascript:;" class="button add_to_cart_btn" item_id={{$hot_pro->id}} >mua hàng</a>
              </form>
              </div>
            </div>
          </div>
        </div>
          <!-- end box product --> 
        @endforeach
          
        </div>
      </div>
  </div>
        <!-- end main --> 
</div>
@endsection
@section('pagejs')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.add_to_cart_btn').on('click', function(){
                var itemId = $(this).attr('item_id');
                $.ajax({
                    url:'{{route('cart.add')}}',
                    method: 'POST',
                    data: {
                        id: itemId,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'JSON',
                    success: function(rp){
                            var total = parseInt($('#mini-cart').html());
                            total++;
                            var totalPrice = 0;
                            var assetBaseUrl = '{{asset('/')}}';
                            var cartDetail = ``;
                            var totalItem = 0;
                            for(var i = 0; i < rp.data.length; i++){
                                var cItem = rp.data[i];
                                totalItem += rp.data[i].quantity;
                                totalPrice += (rp.data[i].quantity*rp.data[i].price);
                                cartDetail += `<li class="clearfix" id="item-1853038">
                                                <div class="image"> <a href="#"> <img alt="Sản phẩm 2" src="${cItem.image}" title="Sản phẩm 2" class="img-responsive"> </a> </div>
                                                <div class="info">
                                                  <h3><a href="#">${cItem.name}</a></h3>
                                                  <p>${cItem.quantity} x ${cItem.price} ₫</p>
                                                </div>
                                                <div> <a href="javascript:;"><i item_id=${cItem.id} class="del-product fa fa-times"></i></a> </div>
                                                </li>`;
                            }
                            $('#mini-cart').html(total)
                            $('.total-price').text('$' + totalPrice);
                            $('.list-cart-mini').empty();
                            $('.list-cart-mini').append(cartDetail);
                            console.log(rp);
                    }
                })
            })

            
            $('.del-product').on('click', function(){
                var itemId = $(this).attr('item_id');
                $.ajax({
                    url:'{{route('del.cart')}}',
                    method: 'POST',
                    data: {
                        id: itemId,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'JSON',
                    success: function(rp){

                               
                            console.log(rp);
                    }
                })
            })
            
        });
    </script>
    
@endsection