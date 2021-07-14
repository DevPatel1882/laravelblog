@extends('admin/layout')

@section('container')

<!-- DataTales Example -->
<div class="container-fluid">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary display-4">Manage Posts</h6>
                            <a href="/admin/add_post" class="btn btn-primary text-light " style="float:right;box-shadow: 10px 10px 10px 0 gray;;">Add new Post</a>
                        </div>
                        <div class="card-body card-responsive">
                            <div class="table-responsive ">
                                <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Slug</th>
                                            <th>Post_date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($result as $i) 
                                        <tr>
                                            <td>{{$i->id}}</td>
                                            <td>{{$i->title}}</td>
                                            <td>{{$i->author}}</td>
                                            <td>{{$i->category}}</td>
                                            <td><img src="{{ asset('storage/post_img/'.$i->image)}}" width="100px;"></td>
                                            <td>{{$i->slug}}</td>
                                            <td>{{$i->post_date}}</td>
                                            <td>
                                                @if($i->status==1)
                                                <a href="/admin/show_post/status/0/{{$i->id}}" class="btn btn-success">Active</a>
                                                @elseif($i->status==0)
                                                <a href="/admin/show_post/status/1/{{$i->id}}"  class="btn btn-danger">Deactive</a>
                                                @endif
                                            </td>
                                            <td style="width:180px;">
                                                <a class="btn btn-success" href="edit/{{$i->id}}">Edit</a>
                                                <a class="btn btn-danger" href="delete/{{$i->id}}">Delete</a>
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