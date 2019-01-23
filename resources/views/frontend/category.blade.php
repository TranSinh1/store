@extends('frontend.layout.index')
@section('content')
<div class="col-xs-12 col-md-9"> 
          <!-- main -->
          <div class="special-collection">
            <div class="tabs-container">
              <div class="clearfix">
                <h2>{{$category->name}}</h2>
              </div>
            </div>
            <div class="tabs-content row">
              <div id="content-tabb1" class="content-tab content-tab-proindex" style="">
                <div class="clearfix"> 
                  @foreach($products as $p)
                  <!-- box product -->
                  <div class="col-xs-6 col-md-3 col-sm-6 ">
                    <div class="product-grid" id="product-1168979">
                      <div class="image"> <a href="{{route('product', ['id' => $p->id])}}"><div style="height: 240px; overflow: hidden;"><img src="{{asset($p->image)}}" title="{{$p->name}}" alt="{{$p->name}}" class="img-responsive"></div></a> </div>
                      <div class="info">
                        <h3 class="name"><a href="{{route('product', ['id' => $p->id])}}">{{$p->name}}</a></h3>
                        <p class="price-box"> <span class="special-price"> <span class="price product-price"><?php echo number_format($p->price)." đ"; ?></span> </span> </p>
                        <div class="action-btn">
                          <form action="" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                          @csrf
                            <a href="javascript:;" item_id={{$p->id}} class="button add_to_cart_btn">Chọn sản phẩm</a>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end box product --> 
					@endforeach
                  <!-- paging -->
                  <div style="clear: both;"></div>
                  <div class="pagination pull-right" style="margin-top: 0px !important">
                    {{$products->links()}}
                  </div>    
                  <div style="clear: both;"></div>       
                <!-- end paging --> 
              </div>
            </div>
          </div>
        </div>
        
        <!-- end main --> 
      </div>
@endsection
