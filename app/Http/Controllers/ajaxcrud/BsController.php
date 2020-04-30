<?php

namespace App\Http\Controllers\ajaxcrud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BS;
use Redirect,Response;

class BsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth','verified']);
      }
    public function index()
    {
        //
        $data['posts'] = BS::orderBy('id','desc')->paginate(8);
   
        return view('ajaxcrud.bs',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $postID = $request->post_id;
        $post   =   BS::updateOrCreate(['id' => $postID],
                    ['bs' => $request->bs]);
    
        return Response::json($post);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $where = array('id' => $id);
        $post  = BS::where($where)->first();
 
        return Response::json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = BS::where('id',$id)->delete();
   
        return Response::json($post);
    }
    public function search(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('b_s_s')->where('bs','LIKE','%'.$request->search."%")->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->bs.'</td>'.
    
    '</tr>';
    }
    return Response($output);
       }
       }
    }
}