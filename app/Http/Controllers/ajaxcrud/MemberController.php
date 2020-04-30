<?php

namespace App\Http\Controllers\ajaxcrud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use Redirect,Response;

class MemberController extends Controller
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
        $data['posts'] = Member::orderBy('id','desc')->paginate(8);
   
        return view('ajaxcrud.members',$data);
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
        $post   =   Member::updateOrCreate(['id' => $postID],
                    ['name' => $request->name, 'id_no' => $request->id_no,'gender' => $request->gender, 
                    'dob' => $request->dob,'place_of_birth' => $request->place_of_birth, 'residence' => $request->residence, 
                    'ministry' => $request->ministry,'phoneno' => $request->phoneno, 
                    'email' => $request->email,'status' => $request->status, 'category' => $request->category, 
                    'bs_group' => $request->bs_group]);
    
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
        $post  = Member::where($where)->first();
 
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
        $post = Member::where('id',$id)->delete();
   
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
}