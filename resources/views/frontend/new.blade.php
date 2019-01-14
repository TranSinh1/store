@extends('frontend.layout.index')
@section('content')
<div class="col-xs-12 col-md-9"> 
          <!-- main -->
          <div class="special-collection">
            <div class="tabs-container">
              <div class="clearfix">
                <h2>Tin tức</h2>
              </div>
            </div>
            <div class="tabs-content row">
              <div id="content-tabb1" class="content-tab content-tab-proindex" style="">
                <div class="clearfix"> 
                @foreach($news as $n)
                  <!-- box product -->
                  <div class="col-xs-6 col-md-6 col-sm-6 ">
                    <div class="product-grid" id="product-1168979">
                      <div class="image"> <a href="{{route('new.detail', ['id' => $n->id])}}"><div style="height: 400px; overflow: hidden;"><img src="{{$n->image}}" title="{{$n->name}}" alt="{{$n->name}}" class="img-responsive"></div></a> </div>
                        <h3 class="name"><a href="{{route('new.detail', ['id' => $n->id])}}">{{$n->name}}</a></h3>
                        <p class="date">{{$n->created_at}}</p>
                        <p class="desc" style="text-indent: 10px;">{{$n->desc}}</p>
                    </div>
                  </div>
                  <!-- end box product --> 
				@endforeach
	              <!-- paging -->
	              <div style="clear: both;"></div>
	              <div class="pagination pull-right" style="margin-top: 0px !important">
	           		{{$news->links()}}
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
