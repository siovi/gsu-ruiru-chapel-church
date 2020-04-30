<?php

namespace App\Http\Controllers\ajaxcrud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Asset;
use Redirect,Response;

class AssetController extends Controller
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
        $data['posts'] = Asset::orderBy('id','desc')->paginate(8);
   
        return view('ajaxcrud.assets',$data);
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
        $post   =   Asset::updateOrCreate(['id' => $postID],
                    ['asset' => $request->asset, 'amount' => $request->amount]);
    
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
        $post  = Asset::where($where)->first();
 
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
        $post = Asset::where('id',$id)->delete();
   
        return Response::json($post);
    }
     public function search(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('assets')->where('asset','LIKE','%'.$request->search."%")->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->asset.'</td>'.
    '<td>'.$post->amount.'</td>'.
    //'<td>'.$post->price.'</td>'.
    '</tr>';
    }
    return Response($output);
       }
       }
    }
    public function postTest(Request $request)
    {
$file_path = $request->input('file_path');  
        return response()->download($file_path);       
    }
}