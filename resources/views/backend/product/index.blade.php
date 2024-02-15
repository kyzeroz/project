    @extends('layouts.master_backend')
    @section('conten')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                    <a href="{{route('p.create')}}" class="btn btn-success mr-3"><i class='bx bxs-plus-circl'></i>Add Product </a>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-16">
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>

                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th class="text-right">Price</th>
                                            <th class="text-right">Category</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product as $pro)
                                        <tr>
                                            <td>{{ $product->firstItem()+ $loop->index}}</td>
                                            <td>{{ $pro->name}}</td>
                                            <td>{{ $pro->category->name}}</td>
                                            <td>
                                                <img src="{{asset('backend/product/resize/'.$pro->image)}}">
                                            </td>
                                            <td>{{$pro->price}}</td>
                                            <td>{{$pro->Category ->name}}</td>
                                            <td>{{$pro->created_at}}</td>
                                            <td>{{$pro->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('p.edit',$pro->product_id)}}"><i class='bx bxs-edit'></i></a>
                                                <a href="{{ url('admin/product/delete/'.$pro->product_id)}}"><i class='bx bxs-trash'></i></a>
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/product/edit/'.$pro->product_id) }}"><i>แก้ไข</i></a>
                                                <a href="{{ url('admin/product/delete/'.$pro->product_id) }}"><i>ลบ</i></a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
    @endsection
