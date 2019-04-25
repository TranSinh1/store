@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper" style="min-height: 385px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New
                    <small>{{$slide->name}}</small>
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
                        <input class="form-control" value="{{$slide->name}}" name="name" placeholder="Please Enter name">
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <img width="100px" height="100px" src="{{asset($slide->image)}}">
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Display</label>
                        <label class="radio-inline">
                            <input name="display" 
                            @if($slide->display == 1)  
                            	{{"checked"}}
                            @endif 
                            value="1" type="radio">Yes
                        </label>
                        <label class="radio-inline">
                            <input name="display"
							 @if($slide->display == 0)  
                            	{{"checked"}}
                            @endif 
                             value="0" type="radio">No
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Create New</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                
            </form></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
