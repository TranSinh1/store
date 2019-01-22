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
                        <input class="form-control" name="name" placeholder="Please Enter name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" placeholder="Please Enter email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Please Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Password Again</label>
                        <input type="password" class="form-control" name="passwordAgain" placeholder="Please Enter password Again">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Please Enter address">
                    </div>
                    <div class="form-group">
                        <label>Avatar</label>
                        <input type="file" name="avatar">
                    </div>
                     <div class="form-group">
                        <label>Role</label>
                   		<select class="form-control" name="role_id">
							@foreach($roles as $r)
                   				<option value="{{$r->id}}">{{$r->name}}</option>
                   			@endforeach
                   		</select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create User</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                
            </form></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

