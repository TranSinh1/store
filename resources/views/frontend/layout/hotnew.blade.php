<div class="home-blog">
    <h2 class="title"> <span>Tin tức</span></h2>
    <div class="row">
      <div class="owl-home-blog owl-home-blog-sidebar"> 
        <!-- list hot news -->
        @foreach ($news as $new)
        <div class="item">
          <div class="article"> <a href="{{route('new.detail', ['id' => $new->id])}}" class="image"> <img src="{{$new->image}}" title="{{$new->name}}" class="img-responsive"> </a>
            <div class="info">
              <h3><a href="{{route('new.detail', ['id' => $new->id])}}">{{$new->name}}</a></h3>
              <p class="time">{{$new->created_at}}</p>
              <p class="desc">{!!$new->desc!!}</p>
            </div>
          </div>
        </div>
        @endforeach
        <!-- end list hot news -->
      </div>
    </div>
</div>
