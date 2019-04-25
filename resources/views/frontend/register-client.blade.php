@extends('frontend.layout.index')
@section('content')
<div class="col-xs-12 col-md-9"> 
	<!-- main -->

	<div class="template-customer">
	  <h1>Đăng ký tài khoản</h1>
	  <p>Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
	  <div class="row" style="margin-top:50px;">
	    <div class="col-md-6">
	      <div class="wrapper-form">
	       @if(count($errors)>0)
		        <div class="alert alert-danger">
		            @foreach($errors->all() as $err)
		               {{$err}}<br>
		            @endforeach
		        </div>
		    @endif
	        <form novalidate action="{{route('register.client')}}" method="post">
	          @csrf
	          <p class="title"><span>Đăng ký tài khoản</span></p>
	          <div class="form-group">
	            <label>Họ và tên:</label>
	            <input type="text" name="name" class="input-control">
	          </div>
	          <div class="form-group">
	            <label>Email:<b id="req">*</b></label>
	            <input type="text" name="email" class="input-control" required="">
	          </div>
	          <div class="form-group">
	            <label>Địa chỉ:</label>
	            <input type="text" name="address" class="input-control">
	          </div>
	          <div class="form-group">
	            <label>Điện thoại:</label>
	            <input type="number" name="phone" class="input-control">
	          </div>
	          <div class="form-group">
	            <label>Mật khẩu:<b id="req">*</b></label>
	            <input type="password" name="password" class="input-control" required="">
	          </div>
	          <div class="form-group">
	            <label>Nhập lại mật khẩu:<b id="req">*</b></label>
	            <input type="password" name="passwordAgain" class="input-control" required="">
	          </div>
	          <div class="form-group">
	            <input type="submit" class="button" value="Đăng ký">
	          </div>
	        </form>
	      </div>
	    </div>
	    <div class="col-md-6">
	      <div class="wrapper-form">
	        <p class="title"><span>Đăng nhập</span></p>
	        <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
	        <a href="{{route('login.client')}}" class="button">Đăng nhập</a> </div>
	    </div>
	  </div>
	</div>
	<!-- end main --> 
</div>
@endsection