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
		  <form action="{{route('update.cart')}}" method="post">
		  @csrf
		    <div class="table-responsive">
		      <table class="table table-cart">
		        <thead>
		          <tr>
		            <th class="image">Ảnh sản phẩm</th>
		            <th class="name">Tên sản phẩm</th>
		            <th class="price">Giá bán lẻ</th>
		            <th class="quantity">Số lượng</th>
		            <th class="price">Thành tiền</th>
		            <th>Xóa</th>
		          </tr>
		        </thead>
		        <tbody id="table-cart">
		        @foreach($cart as $product)
		        	@php $totalPrice += $product['quantity']*$product['price']; @endphp
		          <tr id="row_{{$product['id']}}">
		            <td><img width="100" height="78" src="{{asset($product['image'])}}" class="img-responsive"></td>
		            <td><a href="{{route('product', ['id' => $product['id']])}}">{{$product['name']}}</a></td>
		            <td> <?php echo  number_format($product['price'])." ₫"; ?></td>
		            <td>
			            <input  type="number" 
			            id="qty_{{$product['id']}}" min="1" class="input-control" 
			            value="{{$product['quantity']}}" 
			            name="quantity_{{$product['id']}}" 
			            required="Không thể để trống">
			            <input style="display: none;" type="number" 
			            name="product_{{$product['id']}}" 
			            value="{{$product['id']}}">
		            </td>
		            <td><p><b><?php echo number_format($product['quantity']*$product['price'])." ₫" ; ?></b></p>
		            </td>
		            <td><a href="javascript:;" onclick="del_product({{$product['id']}})" data-id="2479395"><i class="fa fa-trash"></i></a></td>
		          </tr>
		         @endforeach
		        </tbody>
		        <tfoot>
		          <tr>
		            <td colspan="6"><a href="javascript:;" id="remove-cart-all" class="button pull-left">Xóa toàn bộ</a> <a href="{{route('home.page')}}" class="button pull-right black">Tiếp tục mua hàng</a>
		              <input type="submit" class="button pull-right" value="Cập nhật"></td>
		          </tr>
		        </tfoot>
		      </table>
		    </div>
		  </form>
		  <div class="total-cart"> Tổng tiền thanh toán: 
		    <span class="total-price-cart"><?php echo number_format($totalPrice)."₫" ?></span><br>
		    <a href="{{route('pay')}}" class="button black">Thanh toán</a> </div>
		</div>
		<!-- end main --> 
	</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('#remove-cart-all').on('click', function() {
			$.ajax({
				url:"{{route('remove.cart')}}",
				method:'get',
				success:function(rp) {
					$('#table-cart').css({'display':'none'})
					$('.list-cart-mini').css({'display':'none'})
					$('.total-price-cart').text(0+"₫")
					$('.total-price').text(0+"₫")
					$('.mini-cart-count').text(0)
				}
			})
		})
	})
</script>
@endsection
