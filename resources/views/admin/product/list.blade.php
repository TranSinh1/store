@extends('admin.layouts.index')
 @section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
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
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Hot product</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $p)
                    <tr class="odd gradeX" align="center" id="{{$p->id}}">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->price}}</td>
                        <td>
                            <img width="50px" height="50px;" src="{{asset($p->image)}}">
                        </td>
                        <td>{{$p->category->name}}</td>
                        <td>{{$p->quantity}}</td>
                        <td>
                            @if($p->hot_product == 1)
                                <span class="glyphicon glyphicon-ok"></span>
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0);" class="btn-remove_{{$p->id}}"  onclick="deleteAjax({{$p->id}})"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('update.product', ['id' => $p->id])}}">Update</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>            <!-- /.container-fluid -->
    <div colspan="7" class="text-right" >{{$products->links()}}</div>
</div>

@endsection
@section('script')
<script>
    function deleteAjax(p_id) {
        $(document).ready(function(){
            $.ajax({
                url: '{{asset(route('del.product'))}}',
                method: 'POST',
                data: {
                    id: p_id,
                    _token:'{{csrf_token()}}'
                },
                success: function(rp){
                     $('#'+p_id).css({'display':'none'});
                
                     console.log(rp);
                }
            })
        })
    }
</script>
@endsection