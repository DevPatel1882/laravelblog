@extends('admin/layout')

@section('container')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- DataTales Example -->
<div class="container-fluid">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary display-4">Manage Posts</h6>
                            <a href="/admin/user/add" class="btn btn-primary text-light " style="float:right;box-shadow: 10px 10px 10px 0 gray;;">Add new Post</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       
                                        @foreach($result as $i)
                                         
                                        <tr>
                                            <td>{{$i->id}}</td>
                                            <td>{{$i->name}}</td>
                                            <td>{{$i->email}}</td>
                                            <td>{{$i->password}}</td>
                                            <th>
                                            @if($i->status==1)    
                                                <a class="btn btn-success" href="/admin/user/status/0/{{$i->id}}" type="button">Active</a>
                                            @elseif($i->status==0)
                                                 <a class="btn btn-danger" href="/admin/user/status/1/{{$i->id}}" type="button">Deactive</a>
                                                
                                            @endif
                                            </th>
                                             <td style="width:180px;">
                                                <a class="btn btn-success" href="/admin/user/edit/{{$i->id}}">Edit</a>
                                                <a class="btn btn-danger" href="/admin/user/delete/{{$i->id}}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
    let switchery = new Switchery(html,  { size: 'small' });
});</script>



@endsection