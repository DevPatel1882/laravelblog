<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminfunctions extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_user()
    {
        $data['result'] = DB::table('admin_users')->get();
        return view('admin/users',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        $user = DB::table('admin_user')->find($request->user_id);

        
        $user->status = $request->status;
        $user->save();



        
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show_posts(Request $request)
    {
        return view('/admin/show_post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }

    public function post()
    {
        $data['result'] = DB::table('posts')->get(); 
        return view('/admin/show_post',$data);
    }
    public function add_post()
    {
        return view('/admin/add_post');
    }
    public function add_post_submit(Request $request)
    {

        //$image = $request->file('image')->store('public/post_img');
        $image = $request->file('image');
        $ext = $image->extension();
        $file = time().'.'.$ext;
        $image->storeAs('/public/post_img',$file);

        $data=array(
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'content'=>$request->input('content'),
            'category'=>$request->input('category'),
            'short_desc'=>$request->input('short_desc'),
            'slug'=>$request->input('slug'),
            'image'=>$file,
            'status'=>1,
        );

        DB::table('posts')->insert($data);
        return redirect('/admin/show_post');
    }
    public function delete_post($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect('admin/show_post');
    }

    public function edit_post($id)
    {
        $data['result'] = DB::table('posts')->where('id',$id)->get();
        return view('admin/edit_post',$data);
    }
    public function update_post(Request $request ,$id)
    {
        $image = $request->file('image');
        $ext = $image->extension();
        $file = time().'.'.$ext;
        $image->storeAs('/public/post_img',$file);

        $data = array(
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'content'=>$request->input('content'),
            'category'=>$request->input('category'),
            'short_desc'=>$request->input('short_desc'),
            'slug'=>$request->input('slug'),
            'image'=>$file,
            'status'=>1,
        );
        DB::table('posts')->where('id',$id )->update($data);
        return redirect('/admin/show_post');

    }
    public function status($type,$id)
    {
       $data = array(
           'status' => $type,
       );
       DB::table('posts')->where('id',$id)->update($data);
       
       return redirect('admin/show_post');
    }


    
    
}
