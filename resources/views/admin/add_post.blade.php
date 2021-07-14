@extends('admin/layout')
@section('container')


<!-- Area Chart -->
<div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary display-4">Add New Post</h6>
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
                                    <form method="post" action="/admin/add_post_submit" enctype="multipart/form-data">
                                        <div class="form-group row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">title</label>
                                          <div class="col-sm-4">
                                            <input name="title"  type="text" class="form-control" placeholder="" required>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">author</label>
                                            <div class="col-sm-4">
                                              <input name="author"  type="text" class="form-control" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">content</label>
                                            <div class="col-sm-4">
                                                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">category</label>
                                            <div class="col-sm-4">
                                              <input name="category"  type="text" class="form-control" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">short desc</label>
                                            <div class="col-sm-4">
                                              <input name="short_desc"  type="text" class="form-control" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">slug</label>
                                            <div class="col-sm-4">
                                              <input name="slug"  type="text" class="form-control" placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-4">
                                            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
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