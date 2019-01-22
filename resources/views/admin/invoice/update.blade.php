@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper" style="min-height: 385px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Invoice
                    <small>{{$invoice->name}}</small>
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
                        <input class="form-control" value="{{$invoice->name}}" name="name" readonly>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" value="{{$invoice->email}}" name="email" placeholder="Please Enter email" readonly>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" value="{{$invoice->address}}" class="form-control" name="address" readonly>
                    </div>
                    <div class="form-group">
                        <label>Total Price</label>
                        <input type="text" value="{{$invoice->total_price}}" class="form-control" name="total_price" readonly>
                    </div>
                    <div class="form-group">
                        <label>Number phone</label>
                        <input type="text" value="{{$invoice->phone}}" class="form-control" name="phone" readonly>
                    </div>
               
                     <div class="form-group">
                        <label>Status</label>
                   		<select class="form-control" name="status_id">
							@foreach($status as $st)
                   				<option @php echo $invoice->status_id == $st->id ? "selected" : ""; @endphp value="{{$st->id}}">{{$st->status}}</option>
                   			@endforeach
                   		</select>
                    </div>
                    <button type="submit" class="btn btn-primary">Udate Invoice</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                
            </form></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
