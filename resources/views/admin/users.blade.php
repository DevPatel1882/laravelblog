@extends('admin/layout')

@section('container')

<!-- DataTales Example -->
<div class="container-fluid">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary display-4">Manage Posts</h6>
                            <button class="btn btn-primary text-light " style="float:right;box-shadow: 10px 10px 10px 0 gray;;">Add new Post</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($result as $i)
                                        <tr>
                                            <td>{{$i->id}}</td>
                                            <td>{{$i->email}}</td>
                                            <td>{{$i->password}}</td>
                                            <td>
                                            <input data-id="{{$i->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $i->status ? 'checked' : '' }}>
                                            </td>
                                            
                                            
                                            <td style="width:180px;">
                                                <button class="btn btn-success">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>

@endsection