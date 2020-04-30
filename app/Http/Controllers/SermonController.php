<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SermonController extends Controller
{
  public function add_sermon()

  {
   
return view('admin.add_sermons');

}

public function upload(Request $request){
  $this->validate($request,[
  'post_title'=> 'required',
   'video'=> '',

]);
  $posts=new Post;
  $posts->post_title = $request->input('post_title');
  $posts->user_id = Auth::user()->id;

  if (Input::hasFile('video')) {
		$file= Input::file('vdeo');
		$file->move(public_path(). '/files/',
		$file->getClientOriginalName());  		
	echo	$url=URL::to("/") . '/files/' .
				$file->getClientOriginalName(); die;
    
		 }
		 $posts->video=$url;
			$posts->save();
			return redirect('/add_sermons')->
			with('response', 'Sermon Published successifully');


  /*if (Input::hasFile('video')) {
    $video_tmp= Input::file('video');
   echo $video_name->$video_tmp->getClientOriginalName();die;
   // $video_path->move(public_path(). '/posts/',
    //$file->getClientOriginalName());  		
   // $url=URL::to("/") . '/posts/' .
        

       }
       $posts->post_image=$url;
      $posts->save();
      return redirect('/Sermons')->
      with('response', 'Video Published successifully');*/


}


/*/for($i=0;$i<count($request->file('file_name'));$i++)
    //{
        $file=$request->file('file_name');//[$i];
        $destination_path = public_path().'/files';
        $extension = $file->getClientOriginalExtension();
        $files = $file->getClientOriginalName();
        $fileName = $files.'_'.time().'.'.$extension;
        $file->move($destination_path,$fileName);
   // }
    return redirect()->back();

  } */
}
