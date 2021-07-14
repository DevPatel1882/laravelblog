<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function layout()
    {
        return view('front/layout');
    }
    public function index()
    {
        $data['result'] = DB::table('posts')->get();
        return view('index',$data);
    }

    public function post($slug)
    {
        $data['result'] = DB::table('posts')->where('slug',$slug)->get();
        return view('front/post',$data);
    }

    
}
