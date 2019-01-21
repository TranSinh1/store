<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
<base href="{{ asset('/') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title>DKT Store</title>
<meta name="description" content="DKT Store">
<meta property="og:type" content="website">
<meta property="og:title" content="DKT Store">
<meta property="og:image" content="assets_front/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361">
<meta property="og:image:secure_url" content="assets_front/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361">
<meta property="og:url" content="index.html">
<meta property="og:site_name" content="DKT Store">
<link rel="canonical" href="index.html">
<link rel="shortcut icon" href="assets_front/frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
<link href='assets_front/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets_front/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets_front/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets_front/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets_front/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets_front/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets_front/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets_front/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets_front/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">
<div id="fb-root"></div>
@include('frontend.layout.header')
<div class="content">
  <div class="container">
    <h1 style="display:none;">DKT Store</h1>
   @include('frontend.layout.slideshow')
    <div class="row">
      <div class="col-xs-12 col-md-3"> 
        <!-- end support -->
       @include('frontend.layout.suport')
        <!-- end support online --> 
        <!-- hot news -->
        @include('frontend.layout.hotnew');
        <!-- end hot news -->
        <div class="statistics block">
          <div id="bw-statistics"></div>
        </div>
        <div class="fanpage block hidden-sm hidden-xs"> face book fanpage </div>
      </div>
    	@yield('content')
    <!-- adv -->
    <div class="widebanner"> <a href="#"><img src="assets_front/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
    <!-- end adv --> 
    <!-- home news -->
    <div class="home-blog">
      <h2 class="title"> <span>Tin tức</span></h2>
      <div class="row">
        <div class="owl-home-blog owl-home-blog-bottompage">
        @foreach ($listNew as $new)
          <div class="item">
            <div class="article"> <a href="{{route('new.detail', ['id' => $new->id])}}" class="image"> <img src="{{$new->image}}" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
              <div id="not_image" class="info">
                <h3><a href="{{route('new.detail', ['id' => $new->id])}}">{{$new->name}}</a></h3>
                <p class="time">{{$new->created_at}}</p>
                <p class="desc">
                <p style="text-align: justify;">{{$new->desc}}</p>
              </div>
              <div style="clear:both"></div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
    <!-- end home news --> 
  </div>
</div>
<div class="privacy">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets_front/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"> </div>
        <div class="info">
          <h3>Giao hàng miễn phí</h3>
          <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets_front/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuyến mại" title="Khuyến mại"> </div>
        <div class="info">
          <h3>Khuyến mại</h3>
          <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets_front/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"> </div>
        <div class="info">
          <h3>Hoàn trả lại tiền</h3>
          <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
        </div>
      </div>
    </div>
  </div>
</div>
@include('frontend.layout.footer')
<script src='assets_front/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets_front/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets_front/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets_front/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets_front/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
<div class="ajax-error-modal modal">
  <div class="modal-inner">
    <div class="ajax-error-title">Lỗi</div>
    <div class="ajax-error-message"></div>
  </div>
</div>
<div class="ajax-success-modal modal">
  <div class="overlay"></div>
  <div class="content col-xs-12">
    <div class="ajax-left"> <img class="ajax-product-image" alt="&nbsp;" src="#" style="max-width:65px; max-height:100px"/> </div>
    <div class="ajax-right">
      <p class="ajax-product-title"></p>
      <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span> Đã được thêm vào giỏ hàng.</p>
      <div class="actions">
        <button class="button" onclick="window.location='cart'">Đi tới giỏ hàng</button>
        <button class="button" onclick="window.location='checkout'">Thanh toán</button>
      </div>
    </div>
    <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a> </div>
</div>
</body>
</html>
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
                    // var total = parseInt($('#mini-cart').html());
                    // total++;
                    var totalItem = 0;
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
                    $('#mini-cart').html(totalItem)
                    $('.total-price').text('$' + totalPrice);
                    $('.list-cart-mini').empty();
                    $('.list-cart-mini').append(cartDetail);
                    console.log(rp);
            }
        })
    })
})
</script>
<script type="text/javascript"> 
  function del_product(id) {
    $(document).ready(function() {
      $.ajax({
        url: "{{route('del.cart')}}",
        method:'POST',
        data:{
          id: id,
          _token: '{{csrf_token()}}'
        },
        success:function(rp){
          

          console.log(rp.totalItem)
          console.log(rp.totalPrice)
          $('.total-price').text(rp.totalPrice)
          $('.mini-cart-count').text(rp.totalItem)
          $('#item_'+id).css({'display':'none'})
          console.log(rp)
        }
      })
    })
  }
</script>
@yield('script')
@yield('pagejs')