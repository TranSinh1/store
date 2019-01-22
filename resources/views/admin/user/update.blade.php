@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper" style="min-height: 385px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>{{$user->name}}</small>
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
                        <input class="form-control" value="{{$user->name}}" name="name" placeholder="Please Enter name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" value="{{$user->email}}" name="email" placeholder="Please Enter email" readonly>
                    </div>
                    <div class="form-group">
                        <input type="checkbox"  id="changePassword" name="changePassword">
                        <label>Đổi mật khẩu</label>
                        <input class="form-control password" id="password" type="password"  name="password" placeholder="Nhập password" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>nhập lại password</label>
                        <input class="form-control password" id="passwordAgain" type="password" disabled="" name="passwordAgain" placeholder="Nhập lại password" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" value="{{$user->address}}" class="form-control" name="address" placeholder="Please Enter address">
                    </div>
                    <div class="form-group">
                        <label>Avatar</label>
                        <img width="100px;" height="100px" src="{{asset($user->avatar)}}">
                        <input type="file" name="avatar">
                    </div>
                     <div class="form-group">
                        <label>Role</label>
                   		<select class="form-control" name="role_id">
							@foreach($roles as $r)
                   				<option @php echo $user->role_id == $r->id ? "selected" : ""; @endphp value="{{$r->id}}">{{$r->name}}</option>
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
