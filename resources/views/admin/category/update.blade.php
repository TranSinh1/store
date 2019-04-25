@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper" style="min-height: 385px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>{{$cate->name}}</small>
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
                        <form action="{{route('update.cate', ['id' => $cate->id])}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" value="{{$cate->name}}" name="name" placeholder="Please Enter Category Name">
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" name="desc" rows="3" placeholder="Please Enter Category Description">{{$cate->desc}}</textarea>
                            </div>
                             <div class="form-group">
                                <label>Hot category</label>
                                <label class="radio-inline">
                                    <input name="hot_cate" 
                                    @if($cate->hot_cate == 1)  
                                        {{"checked"}}
                                    @endif 
                                    value="1" type="radio">Hot
                                </label>
                                <label class="radio-inline">
                                    <input name="hot_cate"
                                    @if($cate->hot_cate != 1)  
                                        {{"checked"}}
                                    @endif 
                                     value="0" type="radio">Not hot
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Update Category</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        
                    </form></div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
