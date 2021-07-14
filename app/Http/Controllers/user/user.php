<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user extends Controller
{
    public function show()
    {
        $data['result'] = DB::table('admin_users')->get();
        return view('admin/user/show',$data);
    }

    public function add()
    {
        return view('admin/user/add');
    }

    public function submit(Request $request)
    {
        $data = array(
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'status'=>1,
        );
        DB::table('admin_users')->insert($data);

        return redirect('admin/user/show');
    }

    public function delete($id)
    {
        DB::table('admin_users')->where('id',$id)->delete();
        return redirect('admin/user/show');
    }

    public function edit($id)
    {
        $data['result'] = DB::table('admin_users')->where('id',$id)->get();
        return view('admin/user/edit',$data);
    }

    public function update(Request $request , $id)
    {
        $data = array( 
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        );
        DB::table('admin_users')->where('id',$id)->update($data);

        return redirect('admin/user/show');
    }
    public function status(Request $request,$id,$type)
    {
        
        // status functions
       
         
        $data = array(
             'status' => $id,
        );

        DB::table('admin_users')->where('id',$type)->update($data);
        return redirect('admin/user/show');
      

    /*  $data = array(
          'status'=>$request->$status,
      );
       DB::table('admin_users')->where('id',$id)->update($data);
       return redirect('admin/user/show');
    */
    }
}
