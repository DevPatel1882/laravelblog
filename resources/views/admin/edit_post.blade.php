@extends('admin/layout')
@section('container')


<!-- Area Chart -->
<div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary display-4">Edit Post</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                
                                
                                <div class="card-body">
                                    <br>
                                   
                                    <form method="post" action="/admin/update/{{$result['0']->id}}" enctype="multipart/form-data">
                                        <div class="form-group row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">title</label>
                                          <div class="col-sm-4">
                                            <input value="{{$result['0']->title}}" name="title"  type="text" class="form-control" placeholder="" required>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">author</label>
                                            <div class="col-sm-4">
                                              <input value="{{$result['0']->author}}" name="author"  type="text" class="form-control" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">content</label>
                                            <div class="col-sm-4">
                                                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$result['0']->content}}</textarea>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">category</label>
                                            <div class="col-sm-4">
                                              <input value="{{$result['0']->category}}" name="category"  type="text" class="form-control" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">short desc</label>
                                            <div class="col-sm-4">
                                              <input value="{{$result['0']->short_desc}}" name="short_desc"  type="text" class="form-control" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">slug</label>
                                            <div class="col-sm-4">
                                              <input value="{{$result['0']->slug}}" name="slug"  type="text" class="form-control" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-4">
                                            <input value="{{$result['0']->image}}" name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                          </div>
                                          <br>
                                          <button type="submit" class="btn btn-danger " name="submit" >Submit</button>
                                          
                                    </form>
                                                       
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
@endsection