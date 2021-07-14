<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class page extends Controller
{
    
    public function show()
    {
        $data['result'] = DB::table('pages')->get();
        return view('/admin/page/show',$data);
    }
    public function add()
    {
        return view('admin/page/add');
    }  
    public function submit(Request $request)
    {
       $data = array(
           'name'=>$request->input('name'),
           'slug'=>$request->input('slug'),
           'description'=>$request->input('description'),
           
       );
       DB::table('pages')->insert($data);
       return redirect('admin/page/show');
    }
    public function delete($id)
    {
        DB::table('pages')->where('id',$id)->delete();
        return redirect('admin/page/show');
    }
    public function edit($id)
    {
        $data['result'] = DB::table('pages')->where('id',$id)->get();
        return view('admin/page/edit',$data);
    }
    public function update(Request $request , $id)
    {
        $data = array(
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'description'=>$request->input('description'),
        );
        DB::table('pages')->where('id',$id)->update($data);
        return redirect('admin/page/show');
    }

    public function status(Request $request, $type ,$id)
    {
       
        $data = array(
            'status' => $type,
        );
        DB::table('pages')->where('id',$id)->update($data);

        return redirect('admin/page/show');
    }

}
