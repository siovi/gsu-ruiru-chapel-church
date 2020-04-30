<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use DB;
    class SearchController extends Controller
    {
       public function index()
    {
        return view('ajaxcrud.assets');
    }
    public function search(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('assets')->where('asset','LIKE','%'.$request->search."%")
    ->orWhere('amount','LIKE','%'.$request->search."%")
    ->get();
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
    public function searchs(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('h_b_c_s')->where('hbc','LIKE','%'.$request->search."%")->get();
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
    public function searchb(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('attendances')->where('dob','LIKE','%'.$request->search."%")
    ->orWhere('service','LIKE','%'.$request->search."%")
    ->orWhere('male_adult','LIKE','%'.$request->search."%")
    ->orWhere('female_adult','LIKE','%'.$request->search."%")
    ->orWhere('youths','LIKE','%'.$request->search."%")
    ->orWhere('sunday_sch','LIKE','%'.$request->search."%")
    ->orWhere('total','LIKE','%'.$request->search."%")
    ->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->dob.'</td>'.
    '<td>'.$post->service.'</td>'.
    '<td>'.$post->male_adult.'</td>'.
    '<td>'.$post->female_adult.'</td>'.
    '<td>'.$post->youths.'</td>'.
    '<td>'.$post->sunday_sch.'</td>'.
    '<td>'.$post->total.'</td>'.
    '</tr>';
    }
    return Response($output);
       }
       }
    }
    public function searchc(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('baptised_members')
    ->where('name','LIKE','%'.$request->search."%")
    ->orWhere('phoneno','LIKE','%'.$request->search."%")
    ->orWhere('email','LIKE','%'.$request->search."%")
    ->orWhere('gender','LIKE','%'.$request->search."%")
    ->orWhere('dob','LIKE','%'.$request->search."%")
    ->orWhere('dbaptised','LIKE','%'.$request->search."%")
    ->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->name.'</td>'.
    '<td>'.$post->phoneno.'</td>'.
    '<td>'.$post->email.'</td>'.
    '<td>'.$post->gender.'</td>'.
    '<td>'.$post->dob.'</td>'.
    '<td>'.$post->dbaptised.'</td>'.
    //'<td>'.$post->total.'</td>'.
    '</tr>';
    }
    return Response($output);
       }
       }
    }
    public function searchd(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('bs_members')
    ->where('name','LIKE','%'.$request->search."%")
    ->orWhere('gender','LIKE','%'.$request->search."%")
    ->orWhere('dob','LIKE','%'.$request->search."%")
    ->orWhere('residence','LIKE','%'.$request->search."%")
    ->orWhere('phoneno','LIKE','%'.$request->search."%")
    ->orWhere('email','LIKE','%'.$request->search."%")
    ->orWhere('status','LIKE','%'.$request->search."%")
    ->orWhere('group','LIKE','%'.$request->search."%")
    ->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->name.'</td>'.
    '<td>'.$post->gender.'</td>'.
    '<td>'.$post->dob.'</td>'.
    '<td>'.$post->residence.'</td>'.
    '<td>'.$post->phoneno.'</td>'.
    '<td>'.$post->email.'</td>'.
    '<td>'.$post->status.'</td>'.
    '<td>'.$post->group.'</td>'.
    '</tr>';
    }
    return Response($output);
       }
       }
    }
    public function searche(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('members')
    ->where('name','LIKE','%'.$request->search."%")
    ->orWhere('id_no','LIKE','%'.$request->search."%")
    ->orWhere('gender','LIKE','%'.$request->search."%")
    ->orWhere('dob','LIKE','%'.$request->search."%")
    ->orWhere('place_of_birth','LIKE','%'.$request->search."%")
    ->orWhere('residence','LIKE','%'.$request->search."%")
    ->orWhere('ministry','LIKE','%'.$request->search."%")
    ->orWhere('phoneno','LIKE','%'.$request->search."%")
    ->orWhere('email','LIKE','%'.$request->search."%")
    ->orWhere('status','LIKE','%'.$request->search."%")
    ->orWhere('category','LIKE','%'.$request->search."%")
    ->orWhere('bs_group','LIKE','%'.$request->search."%")
    
    ->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->name.'</td>'.
    '<td>'.$post->id_no.'</td>'.
    '<td>'.$post->gender.'</td>'.
    '<td>'.$post->dob.'</td>'.
    '<td>'.$post->place_of_birth.'</td>'.
    '<td>'.$post->residence.'</td>'.
    '<td>'.$post->ministry.'</td>'.
    '<td>'.$post->phoneno.'</td>'.
    '<td>'.$post->email.'</td>'.
    '<td>'.$post->status.'</td>'.
    '<td>'.$post->category.'</td>'.
    '<td>'.$post->bs_group.'</td>'.
    
    '</tr>';
    }
    return Response($output);
       }
       }
    }
    public function searchf(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('leaders')
    ->where('name','LIKE','%'.$request->search."%")
    ->orWhere('gender','LIKE','%'.$request->search."%")
    ->orWhere('dob','LIKE','%'.$request->search."%")
    ->orWhere('residence','LIKE','%'.$request->search."%")
    ->orWhere('position','LIKE','%'.$request->search."%")
    ->orWhere('phoneno','LIKE','%'.$request->search."%")
    ->orWhere('email','LIKE','%'.$request->search."%")
   
    ->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->name.'</td>'.
    '<td>'.$post->gender.'</td>'.
    '<td>'.$post->dob.'</td>'.
    '<td>'.$post->residence.'</td>'.
    '<td>'.$post->position.'</td>'.
    '<td>'.$post->phoneno.'</td>'.
    '<td>'.$post->email.'</td>'.
    
    
    '</tr>';
    }
    return Response($output);
       }
       }
    }
    public function searchg(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('visitors')
    ->where('name','LIKE','%'.$request->search."%")
    ->orWhere('gender','LIKE','%'.$request->search."%")
    ->orWhere('dob','LIKE','%'.$request->search."%")
    ->orWhere('place_of_birth','LIKE','%'.$request->search."%")
    ->orWhere('residence','LIKE','%'.$request->search."%")
    ->orWhere('ministry','LIKE','%'.$request->search."%")
    ->orWhere('phoneno','LIKE','%'.$request->search."%")
    ->orWhere('email','LIKE','%'.$request->search."%")
   
    ->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->name.'</td>'.
    '<td>'.$post->gender.'</td>'.
    '<td>'.$post->dob.'</td>'.
    '<td>'.$post->place_of_birth.'</td>'.
    '<td>'.$post->residence.'</td>'.
    '<td>'.$post->ministry.'</td>'.
    '<td>'.$post->phoneno.'</td>'.
    '<td>'.$post->email.'</td>'.
    
    
    '</tr>';
    }
    return Response($output);
       }
       }
    }
    public function searchi(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('believers')
    ->where('name','LIKE','%'.$request->search."%")
    ->orWhere('gender','LIKE','%'.$request->search."%")
    ->orWhere('dob','LIKE','%'.$request->search."%")
    ->orWhere('date','LIKE','%'.$request->search."%")
    ->orWhere('phoneno','LIKE','%'.$request->search."%")
    ->orWhere('email','LIKE','%'.$request->search."%")
    ->orWhere('status','LIKE','%'.$request->search."%")
   
    ->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->name.'</td>'.
    '<td>'.$post->gender.'</td>'.
    '<td>'.$post->dob.'</td>'.
    '<td>'.$post->date.'</td>'.
    '<td>'.$post->phoneno.'</td>'.
    '<td>'.$post->email.'</td>'.
    '<td>'.$post->status.'</td>'.
    
    
    '</tr>';
    }
    return Response($output);
       }
       }
    }
    public function searchj(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('categories')->where('category','LIKE','%'.$request->search."%")->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->category.'</td>'.
    //'<td>'.$post->amount.'</td>'.
    //'<td>'.$post->price.'</td>'.
    '</tr>';
    }
    return Response($output);
       }
      }
      }
      public function searchh(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $posts=DB::table('sundays')
    ->where('birthday','LIKE','%'.$request->search."%")
    ->where('tithes','LIKE','%'.$request->search."%")
    ->where('offering','LIKE','%'.$request->search."%")
    ->where('total','LIKE','%'.$request->search."%")
    ->get();
    if($posts)
    {
    foreach ($posts as $key => $post) {
    $output.='<tr>'.
    '<td>'.$post->id.'</td>'.
    '<td>'.$post->birthday.'</td>'.
    '<td>'.$post->tithes.'</td>'.
    '<td>'.$post->offering.'</td>'.
    '<td>'.$post->total.'</td>'.
    '</tr>';
    }
    return Response($output);
       }
      }
      }
    }