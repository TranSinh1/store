@extends('admin.layouts.index')
 @section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            </div>
            @if(session('alert'))
                <div style="margin-top: 40px;" class="alert alert-success">{{session('alert')}}</div>
            @endif
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
            </div>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" name="keyword" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Adress</th>
                        <th>Total Price</th>
                        <th>Number phone</th>
                        <th>Paymethod</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($invoice as $inv)
                    <tr class="odd gradeX" align="center" id="{{$inv->id}}">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$inv->name}}</td>
                        <td>{{$inv->email}}</td>
                        <td>{{$inv->address}}</td>
                        <td>{{$inv->total_price}}</td>
                        <td>{{$inv->phone}}</td>
                        <td>
                            {{$inv->paymethod->name}}
                        </td>
                        <td>{{$inv->status->status}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{asset(route('del.invoice', ['id' => $inv->id]))}}" onclick="return window.confirm('Are you sure?');"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('update.invoice', ['id' => $inv->id])}}">Update</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>            <!-- /.container-fluid -->
    <div colspan="7" class="text-right" >{{$invoice->links()}}</div>
</div>
@endsection
