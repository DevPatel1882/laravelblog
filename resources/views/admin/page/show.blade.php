@extends('admin/layout')

@section('container')

<!-- DataTales Example -->
<div class="container-fluid">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary display-4">Manage Posts</h6>
                            <a href="/admin/page/add" class="btn btn-primary text-light " style="float:right;box-shadow: 10px 10px 10px 0 gray;;">Add new Post</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>name</th>
                                            <th>slug</th>
                                            <th>added on</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       
                                        @foreach($result as $i)
                                         
                                        <tr>
                                            <td>{{$i->id}}</td>
                                            <td>{{$i->name}}</td>
                                            <td>{{$i->slug}}</td>
                                            <td>{{$i->added_on}}</td>
                                            <td>
                                                @if($i->status==1)
                                                
                                                <a href="/admin/page/status/0/{{$i->id}}" class="btn btn-success">Active</a>
                                                @elseif($i->status==0)
                                                <a href="/admin/page/status/1/{{$i->id}}" class="btn btn-danger">Deactive</a>
                                                @endif
                                            </td>

                                             <td style="width:180px;">
                                                <a class="btn btn-success" href="/admin/page/edit/{{$i->id}}">Edit</a>
                                                <a class="btn btn-danger" href="/admin/page/delete/{{$i->id}}">Delete</a>
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