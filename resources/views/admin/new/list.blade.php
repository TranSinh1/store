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
                        <th>Description</th>
                        <th>Detail</th>
                        <th>Image</th>
                        <th>Hot new</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($news as $n)
                    <tr class="odd gradeX" align="center" id="{{$n->id}}">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$n->name}}</td>
                        <td>{{$n->desc}}</td>
                        <td>{{$n->new_detail}}</td>
                        <td>
                            <img width="50px" height="50px;" src="{{asset($n->image)}}">
                        </td>
                        <td>
                            @if($n->hot_new == 1)
                                <span class="glyphicon glyphicon-ok"></span>
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{asset(route('del.new', ['id' => $n->id]))}}" class="btn-remove_{{$n->id}}" onclick="return window.confirm('Are you sure?');"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('update.new', ['id' => $n->id])}}">Update</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>            <!-- /.container-fluid -->
    <div colspan="7" class="text-right" >{{$news->links()}}</div>
</div>

@endsection
