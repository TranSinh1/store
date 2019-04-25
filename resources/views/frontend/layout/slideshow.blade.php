 <!-- category product -->
    <div class="slideshow">
      <div class="row">
       @include('frontend.layout.menu')
        <div class="col-md-9 col-xs-12 col-sm-12">
          <div class="owl-slider">
            <div class="item"> 
              <!-- ============================ -->
              <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->
                <ol class="carousel-indicators">
                @php $i = 0; @endphp
                @foreach($slide as $s)
                  <li data-target="#myCarousel" data-slide-to="{{$i}}"
                    @if($i == 0)
                      class="active"
                    @endif>
                  </li>
                  @php $i++; @endphp
                @endforeach
                </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                @php $i = 0; @endphp
                @foreach($slide as $s)
                  <div style="width: 847px;height: 451px;" 
                  @if($i==0)
                    class="item active"
                  @else
                    class="item"
                  @endif
                    >
                  @php $i++; @endphp
                   <img width="847"  src="{{asset($s->image)}}" alt="Los Angeles"> </div>
                @endforeach
                </div>
                
                <!-- Left and right controls --> 
              </div>
              <!-- ============================ --> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end category product -->
