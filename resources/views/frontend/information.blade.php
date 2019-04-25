@extends('frontend.layout.index')
@section('content')
<div class="col-xs-12 col-md-9"> 
	<!-- main -->

	<div class="template-customer ">
	  <h1>Thông tin người dùng</h1>
	  <div class="row" style="margin-top:50px;">
	    <div class="col-md-12">
	      <div class="wrapper-form">
	       @if(count($errors)>0)
		        <div class="alert alert-danger">
		            @foreach($errors->all() as $err)
		               {{$err}}<br>
		            @endforeach
		        </div>
		    @endif
		    @if(session('alert'))
                <div class="alert alert-success">{{session('alert')}}</div>
            @endif
	        <form novalidate action="{{route('update.infor', ['id' => $user->id])}}" method="post">
	          @csrf
	          <p class="title"><span>Thông tin của bạn</span></p>
	          <div class="form-group">
	            <label>Họ và tên:</label>
	            <input type="text" name="name" value="{{$user->name}}" class="input-control">
	          </div>
	          <div class="form-group">
	            <label>Email:<b id="req">*</b></label>
	            <input type="text" name="email" value="{{$user->email}}" readonly="" class="input-control" required="">
	          </div>
	          <div class="form-group">
	            <label>Địa chỉ:</label>
	            <input type="text" value="{{$user->address}}" name="address" class="input-control">
	          </div>
	          <div class="form-group">
	            <label>Điện thoại:</label>
	            <input type="number" value="{{$user->phone}}" name="phone" class="input-control">
	          </div>
	          <div class="form-group">
	          	<input type="checkbox"  id="changePass" name="changePass">
	          	<b id="req">Đổi mật khẩu</b>
	          </div>
	          <div class="form-group">
	          	
	            <label>Nhập mật khẩu:<b id="req">*</b></label>
	            <input type="password" name="password" placeholder="Nhập mật khẩu" class="input-control pass" disabled="" required="">
	          </div>
	          <div class="form-group">
	            <label>Nhập lại mật khẩu:<b id="req">*</b></label>
	            <input type="password" name="passwordAgain" placeholder="Nhập lại mật khẩu" class="input-control pass" disabled="" required="">
	          </div>
	          <div class="form-group" style="text-align: center;">
	            <input type="submit" class="button" value="Submit">
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end main --> 
</div>
@endsection