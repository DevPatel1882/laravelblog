<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class contact_us extends Controller
{
    public function contact()
    {
        return view('/front/contact');
    }
    public function submit(Request $request)
    {
       $data = array(
           'name'=>$request->input('name'),
           'email'=>$request->input('email'),
           'phone'=>$request->input('phone'),
           'message'=>$request->input('message'),
       );
       DB::table('contacts')->insert($data);

       return redirect('/');
    }
}
