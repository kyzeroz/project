@extends('layouts.master_backend')
@section('conten')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User Table</h1>
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

                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th class="text-right">EMIAL</th>
                                        <th class="text-right">PHONE</th>

                                    </tr>
                                    <tbody>
                                    @foreach ($user as $u)
                                    <tr>
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td class="text-right">{{$u->email}}</td>
                                        <td class="text-right">{{$u->phone}}</td>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection
