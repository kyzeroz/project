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
          <form method="POST" action="{{ url('admin/catagory/insert') }}">
                                    @csrf
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                 <div class="card-body">
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อ"
                                      aria-describedby="defaultFormControlHelp"/>
                                      <div class="mt-3">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                      <input type="submit" value="บันทึก" class="btn btn-primary mt-3" บันทึก>
                                    <a href="{{ route ('c.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          </form>
                        </div>

@endsection

