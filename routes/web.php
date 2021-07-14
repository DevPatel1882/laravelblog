<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_auth;
use App\Http\Controllers\adminfunctions;
use App\Http\Controllers\admin\page;
use App\Http\Controllers\user\user;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\contact_us;

// Admin Panel codes (backand code)

Route::view('admin/layout','admin.layout');

Route::view('admin/login','admin.admin_login');
Route::post('admin/login_submit',[admin_auth::class,'login_submit']);

Route::get('/admin/logout',function(){
     session()->forget('BLOG_USER_ID');
     return redirect('/admin/login');
});

Route::group(['middleware'=>['adminAuth']],function(){

    // Post Functions
    Route::get('admin/add_post',[adminfunctions::class,'add_post']);
    Route::post('admin/add_post_submit',[adminfunctions::class,'add_post_submit']);
    Route::get('admin/delete/{id}',[adminfunctions::class,'delete_post']);
    Route::get('admin/edit/{id}',[adminfunctions::class,'edit_post']);
    Route::post('admin/update/{id}',[adminfunctions::class,'update_post']);
    Route::get('admin/show_post',[adminfunctions::class,'post']);

    Route::get('admin/show_post/status/{type}/{id}',[adminfunctions::class,'status']);

    // page function
    Route::get('admin/page/show',[page::class,'show']); 
    Route::get('admin/page/add',[page::class,'add']);
    Route::post('admin/page/submit',[page::class,'submit']);
    Route::get('admin/page/delete/{id}',[page::class,'delete']);
    Route::get('admin/page/edit/{id}',[page::class,'edit']);
    Route::post('admin/page/update/{id}',[page::class,'update']);

    Route::get('admin/page/status/{id}/{type}',[page::class,'status']);

    //user functions
    Route::get('admin/user/show',[user::class,'show']);
    Route::get('admin/user/add',[user::class,'add']);
    Route::post('admin/user/submit',[user::class,'submit']);
    Route::get('admin/user/delete/{id}',[user::class,'delete']);
    Route::get('admin/user/edit/{id}',[user::class,'edit']);
    Route::post('admin/user/update/{id}',[user::class,'update']);

    Route::get('admin/user/status/{type}/{id}',[user::class,'status']);


    Route::get('admin/users',[adminfunctions::class,'show_user']);

});

// frontend functions
Route::get('front/layout',[BlogController::class,'layout']);

Route::get('/',[BlogController::class,'index']);
Route::get('/post/{id}',[BlogController::class,'Post']);


Route::get('contact',[contact_us::class,'contact']);
Route::post('contact/submit',[contact_us::class,'submit']);