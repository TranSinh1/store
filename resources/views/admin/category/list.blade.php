@extends('admin.layouts.index')
 @section('content')
 <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
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
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Hot category</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $cate)
                    <tr class="odd gradeX" align="center" id="{{$cate->id}}">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$cate->name}}</td>
                        <td>{{$cate->slug}}</td>
                        <td>{{$cate->desc}}</td>
                        <td>
                            @if($cate->hot_cate == 1)
                                <span class="glyphicon glyphicon-ok"></span>
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0);" class="btn-remove_{{$cate->id}}"  onclick="deleteAjax({{$cate->id}})"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('update.cate', ['id' => $cate->id])}}">Update</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>            <!-- /.container-fluid -->
    <div colspan="7" class="text-right" >{{$categories->links()}}</div>
</div>

@endsection
@section('script')
<script>
    function deleteAjax(cate_id) {
        $(document).ready(function(){
            $.ajax({
                url: '{{asset(route('del.cate'))}}',
                method: 'POST',
                data: {
                    id: cate_id,
                    _token:'{{csrf_token()}}'
                },
                success: function(rp){
                     $('#'+cate_id).css({'display':'none'});
                
                     console.log(rp);
                }
            })
        })
    }
</script>
@endsection