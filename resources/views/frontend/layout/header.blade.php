<?php 
    $totalItem = 0;
    foreach($cart as $c){
        $totalItem += $c['quantity'];
    }
 ?>
<!-- header -->
<header id="header"> 
  <!-- top header -->
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
        @if(!Auth::check())
          <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="{{route('login.client')}}"><i class="fa fa-user"></i> Đăng nhập</a> <a href="{{route('register.client')}}"><i class="fa fa-user-plus"></i> Đăng ký</a> </div>
        @else
          <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="{{route('information')}}"><i class="fa fa-user"></i>{{Auth::user()->name}}</a> <a href="{{route('list-order')}}"><i class=""></i>Đơn hàng</a> <a href="{{route('logout.client')}}"><i class="fa fa-user-plus"></i> Đăng xuất</a> </div>
        @endif
      </div>
    </div>
  </div>
  <!-- end top header --> 
  <!-- middle header -->
  <div class="mid-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="{{route('home.page')}}"> <img src="assets_front/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
        <div class="col-xs-12 col-sm-12 col-md-6 header-search">
          <form method="get" action="">
            <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." name="search" class="input-control">
            <button  type="submit"> <i class="fa fa-search"></i> </button>
          </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
          <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="{{route('view.cart')}}"> <span class="mini-cart-count" id="mini-cart">{{$totalItem}}</span> sản phẩm <i class="fa fa-caret-down"></i></a>
            <div class="content-mini-cart">
                <ul class="list-unstyled list-cart-mini">
                @php
                    $totalPrice = 0;
                @endphp
                @foreach ($cart as $item)
                  @php
                        $totalPrice += ($item['quantity']*$item['price'])
                  @endphp
                  <li class="clearfix" id="item_{{$item['id']}}">
                    <div class="image"> <a href="{{route('product', ['id' => $item['id']])}}"> <img alt="Sản phẩm 2" src="{{asset($item['image'])}}" title="Sản phẩm 2" class="img-responsive"> </a> </div>
                    <div class="info" id="item-cart">
                      <h3><a href="{{route('product', ['id' => $item['id']])}}">{{$item['name']}}</a></h3>
                      <p>{{$item['quantity']}} x @php echo number_format($item['price'])." ₫"; @endphp</p>
                    </div>
                    <div> <a href="javascript:;"> <i  class="fa fa-times" id="del-product-{{$item['id']}}" onclick="del_product({{ $item['id'] }})" item_id={{$item['id']}}"></i></a> </div>
                  </li>
                @endforeach
                </ul>
                <div class="total clearfix"> <span class="pull-left">Tổng tiền:</span> <span class="pull-right total-price">@php echo number_format($totalPrice)." ₫"; @endphp</span> </div>
                <a href="{{route('pay')}}" class="button">Thanh toán</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end middle header --> 
  <!-- bottom header -->
  <div class="bottom-header">
    <div class="container">
      <div class="clearfix">
        <ul class="main-nav hidden-xs hidden-sm list-unstyled">
          <li class="active"><a href="{{route('home.page')}}">Trang chủ</a></li>
          <li ><a href="{{route('introduce')}}">Giới thiệu</a></li>
          <li ><a href="{{route('product.page')}}">Sản phẩm</a></li>
          <li ><a href="{{route('new')}}">Tin tức</a></li>
         <!--  <li ><a href="lien-he">Liên hệ</a></li> -->
        </ul>
        <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
        <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
          <li><a href="{{asset(route('home.page'))}}">Trang chủ</a></li>
          <li><a href="gioi-thieu">Giới thiệu</a></li>
          <li><a href="collections/all">Sản phẩm</a>
            <ul style="display:none">
              <li><a href="san-pham-noi-bat">Sản phẩm nổi bật</a></li>
              <li><a href="san-pham-khuyen-mai">Sản phẩm khuyến mãi</a></li>
              <li><a href="dien-thoai-di-dong">Điện thoại di động</a></li>
              <li><a href="laptop">Laptop</a></li>
              <li><a href="tivi">Tivi</a></li>
              <li><a href="tai-nghe">Tai nghe</a></li>
              <li><a href="am-thanh">Âm thanh</a></li>
              <li><a href="may-van-phong">Máy văn phòng</a></li>
            </ul>
          </li>
          <li><a href="tin-tuc">Tin tức</a></li>
          <li><a href="lien-he">Liên hệ</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end bottom header --> 
</header>
<!-- end header -->
