@extends('layouts.master_backend')
@section('conten')
<div class="main-content">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                </div>
                                 <form action="{{ url('admin/product/insert') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                      />
                                      <div class="mt-3">
                                        @error('name')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                      </div>


                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                      />

                                      <div class="mt-3">
                                        @error('price')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                      </div>

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      name="description"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                      />
                                      <div class="mt-3">
                                        @error('description')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                      </div>

                                    <label for="defaultFormControlInput" class="form-label">Category</label>
                                    <select name="category_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                      <option selected>กรุณาเลือกประเภทสินค้า</option>
                                      @foreach ($category as $cat )
                                      <option value="{{$cat->category_id}}">{{$cat->name}}</option>
                                      @endforeach
                                    </select>

                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                      <div class="input-group">
                                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>
                                      <div class="mt-3">
                                        @error('image')

                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                      </div>

                                    <input type="submit" value='บันทึก' class="btn btn-primary mt-3">
                                    <a href="{{ route ('p.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                   </div>
                                 </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection

