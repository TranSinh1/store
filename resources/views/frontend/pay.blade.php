@extends('frontend.layout.index')
@section('content')
<div class="col-xs-12 col-md-9"> 
    <!-- main -->
    <div class="template-customer">
      <h1>Nhập thông tin để mua hàng</h1>
      <p>Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
      <div class="row" style="margin-top:50px;">
  	  	@if(count($errors)>0)
	        <div class="alert alert-danger">
	            @foreach($errors->all() as $err)
	               {{$err}}<br>
	            @endforeach
	        </div>
	    @endif
      	@if(session('alert'))
		    <div class="alert alert-danger">{{session('alert')}}</div>
		@endif
        <div class="col-md-6">
          <div class="wrapper-form">
          @if(Auth::check())
          	@php $user = Auth::user(); @endphp
          @endif
            <form method="post" action="{{route('pay')}}">
            @csrf
              <p class="title"><span>Thông tin khách hàng</span></p>
              <div class="form-group">
                <label>Họ và tên:</label>
                <input type="text" value="@php echo isset($user) ? $user->name : ''; @endphp" name="name" class="input-control">
              </div>
              <div class="form-group">
                <label>Email:<b id="req">*</b></label>
                <input type="text" value="@php echo isset($user) ? $user->email : ''; @endphp" name="email" class="input-control" required="">
              </div>
              <div class="form-group">
                <label>Địa chỉ:</label>
                <input type="text" value="@php echo isset($user) ? $user->address : ''; @endphp" name="address" class="input-control">
              </div>
              <div class="form-group">
                <label>Điện thoại:</label>
                <input type="text" value="@php echo isset($user) ? $user->phone : ''; @endphp" name="phone" class="input-control">
              </div>
              <div class="form-group">
	                <label>Phương thức thanh toán</label>
	           		<select class="form-control" name="paymethod_id">
						@foreach($paymethod as $pay)
	           				<option value="{{$pay->id}}">{{$pay->name}}</option>
	           			@endforeach
	           		</select>
	           </div>
	           <div class="form-group">
                <input type="submit" class="button" value="Thanh toán">
              </div>
            </form>
          </div>
        </div>
        @if(!Auth::check())
        <div class="col-md-6">
          <div class="wrapper-form">
            <p class="title"><span>Đăng nhập</span></p>
            <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
            <a href="{{route('register.client')}}" class="button">Đăng nhập</a> </div>
        </div>
        @endif
      </div>
    </div>
    <!-- end main --> 
 </div>
@endsection