 <div class="col-md-3 col-xs-12 hidden-xs hidden-sm">
  <aside class="aside-category">
    <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
    <ul class="list-unstyled">
    @foreach($categories as $cate)
      <li ><a href="{{route('category', ['id' => $cate->id])}}">{{$cate->name}}</a></li>
    @endforeach
    </ul>
  </aside>
</div>
