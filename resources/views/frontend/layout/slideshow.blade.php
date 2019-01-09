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
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active"> <img src="assets_front/frontend/images/la.jpg" alt="Los Angeles"> </div>
                  <div class="item"> <img src="assets_front/frontend/images/slideshow1221b.jpg" alt="Los Angeles"> </div>
                  <div class="item"> <img src="assets_front/frontend/images/chicago.jpg" alt="Chicago"> </div>
                  <div class="item"> <img src="assets_front/frontend/images/ny.jpg" alt="New York"> </div>
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
