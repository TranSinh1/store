@extends('frontend.layout.index')
@section('content')
<div class="tab-container">
	<div id="tab1" class="content-tabs">
		<h3>{{$new->name}}</h3>
		<div style="text-align: center;"><img src="{{asset($new->image)}}" style="max-width: 600px;"></div>
        <div class="rte">
          <p style="text-align: justify;">
          {!!$new->desc!!}
          </p>
          <p style="text-align: justify;">
          {!!$new->new_detail!!}
          </p>
        </div>
    </div>
</div>
@endsection