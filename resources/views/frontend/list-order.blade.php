@extends('frontend.layout.index')
@section('content')
	
	<div class="col-xs-12 col-md-9"> 
		<div style="margin-top: 20px;">
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
		</div>
		<!-- main -->
		<div class="template-cart" >
		  
		    <div class="table-responsive">
		      <table class="table table-cart">
		        <thead>
		          <tr>
		            <th class="image">Mã hóa đơn</th>
		            <th>Ngày mua hàng</th>
		        	
		            <!-- <th>Tên sản phẩm</th>
		            <th class="name">Ảnh sản phẩm</th>
		            <th class="price">Số lượng</th>
		            <th class="quantity">Giá</th> -->
			        
			        <th class="price">Tổng tiền</th>
			        <th>Trạng thái đơn hàng</th>
		          </tr>
		        </thead>
		        <?php $row = 0; ?>
		        @foreach($invoice as $ord)
		        <tbody id="table-cart">
		        	
			        	<tr id="" >
				          	<td rowspan="" >{{$ord->id}}</td>
				          	<td>{{date_format($ord->created_at, 'd/m/y')}}</td>
				          	<!-- @foreach($ord->product as $ord_detail)
					       	
						          	<td>{{$ord_detail->name}}</td>
						            <td><img width="50" height="50" src="{{$ord_detail->image}}" class="img-responsive"></td>
						            <td>{{$ord_detail->pivot->quantity}}</td>
						            <td>{{$ord_detail->pivot->unit_price}}</td>
						    
					        @endforeach -->
					        <td><?php echo number_format($ord->total_price)." ₫"?></td>
					        <td>{{$ord->status->status}}</td>
			        	</tr>
		        </tbody>
		        @endforeach
		      </table>
		    </div>
		 </div>
		<!-- end main --> 
	</div>
@endsection

