@extends('layouts.master_backend')
@section('conten')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                            <a href="{{route('c.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circl'></i>Add Catagory</a>
                       </div>
                   </div>
               </div>
                </div>
                   </div>
                   <div class="row justify-content-center">
                       <div class="col-md-6 text-center mb-5">

                       </div>
                       <div class="table-responsive table--no-card m-b-30">
                           <table class="table table-borderless table-striped table-earning">
                           <thead>

                           <tr>
                           <th>No</th>
                           <th>Name</th>
                           <th>Created_at</th>
                           <th>Created_at</th>
                           <th>Actions</th>

                                   </tr>
                           <tbody>
                                   @foreach($category as $cat)
                                   <tr>
                                   <td>{{ $category->firstItem() + $loop->index }}</td>
                                   <td>{{ $cat->name }}</td>
                                   <td>{{ $cat->created_at }}</td>
                                   <td>{{ $cat->updated_at }}</td>

                                   <td>
                                   <a href="{{ url('admin/catagory/edit/'.$cat->category_id) }}"><i>แก้ไข</i></a>
                                   <a href="{{ url('admin/catagory/delete/'.$cat->category_id) }}"><i>ลบ</i></a>




                                       </td>
                                   </tr>
                                   @endforeach
                               </tbody>
                               </table>
                               <div class="mt-3 container">
                                  {{ $category->links('pagination::bootstrap-5')}}
                               </div>
                                </div>
                            </div>
             </div>
            </div>



@endsection
