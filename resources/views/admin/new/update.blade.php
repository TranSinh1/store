@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper" style="min-height: 385px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New
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
                        <input class="form-control" value="{{$new->name}}" name="name" placeholder="Please Enter name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Please Enter Description" name="desc">{{$new->desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>New detail</label>
                        <textarea class="form-control" rows="3" placeholder="Please Enter new detail" name="new_detail" >{{$new->new_detail}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <img width="100px" height="100px;" src="{{asset($new->image)}}">
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Hot new</label>
                        <label class="radio-inline">
                            <input name="hot_new" 
                            @if($new->hot_new == 1)  
								{{"checked"}}
                            @endif 
                            value="1" type="radio">Hot
                        </label>
                        <label class="radio-inline">
                            <input name="hot_new"
							@if($new->hot_new != 1)  
								{{"checked"}}
                            @endif 
                             value="0" type="radio">Not hot
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Update New</button>
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
    	CKEDITOR.replace('new_detail');
    	CKEDITOR.replace('desc');
    }); 	
</script>
@endsection
