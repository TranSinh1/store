@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper" style="min-height: 385px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Create</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
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
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter name product">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                   		<select class="form-control" name="category_id">
							@foreach($categories as $cate)
                   				<option value="{{$cate->id}}">{{$cate->name}}</option>
                   			@endforeach
                   		</select>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price" placeholder="Please Enter price">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Please Enter Description" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Product detail</label>
                        <textarea class="form-control" rows="3" placeholder="Please Enter product detail" name="product_detail" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Hot product</label>
                        <label class="radio-inline">
                            <input name="hot_product" value="1" type="radio">Hot
                        </label>
                        <label class="radio-inline">
                            <input name="hot_product" value="0" type="radio">Not hot
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Product Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                
            </form></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
@section('script')
 <script type="text/javascript">
    $(document).ready(function() {
    	CKEDITOR.replace('product_detail');
    	CKEDITOR.replace('desc');
    }); 	
</script>
@endsection
