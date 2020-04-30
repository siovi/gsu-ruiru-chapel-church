<?php

namespace App\Http\Controllers\ajaxcrud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HBC;
use Redirect,Response;

class HbcController extends Controller
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
        $data['posts'] = HBC::orderBy('id','desc')->paginate(8);
   
        return view('ajaxcrud.hbc',$data);
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
        $post   =   HBC::updateOrCreate(['id' => $postID],
                    ['hbc' => $request->hbc]);
    
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
        $post  = HBC::where($where)->first();
 
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
        $post = HBC::where('id',$id)->delete();
   
        return Response::json($post);
    }
    public function searc(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('hbcs')->where('hbc','LIKE','%'.$request->searc."%")->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->hbc.'</td>'.
    //'<td>'.$post->amount.'</td>'.
    //'<td>'.$post->price.'</td>'.
    '</tr>';
    }
    return Response($output);
       }
       }
    }
}