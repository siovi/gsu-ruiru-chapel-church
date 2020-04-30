<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Profile;
use App\Giving;
use App\User;
use App\Post;
use App\Event;
use App\Member;
use App\Offering;
use App\Sunday;
use App\Asset;
use App\Visitor;
use App\Leader;
use App\Eventss;
use App\BaptisedMember;
use App\BS;
use App\HBC;
use App\Believer;
use App\Attendance;
use App\Joinministry;
use App\Joinbs;
use App\Notice;
use Auth;
use App\Nexmo;
use App\Http\Requests;
use Neximo\Laravel\Facades\Neximo;
use Spatie\Searchable\Search;
use Charts;


class PageController extends Controller
{
	 public function __construct()
    {
		$this->middleware(['auth','verified']);
    }
    
  public function indexs()
    {
    	return view('indexs');
	}
	

    //charts
	public function chart()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Monthly new Register Users")
			      ->elementLabel("Total Users")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);
        return view('activity',compact('chart'));
    }
    public function pie()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Monthly new Register Users")
			      ->elementLabel("Total Users")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);

		$pie  =	 Charts::create('pie', 'highcharts')
				    ->title('My nice chart')
				    ->labels(['First', 'Second', 'Third'])
				    ->values([5,10,20])
				    ->dimensions(1000,500)
				    ->responsive(true);
        return view('activity',compact('chart','pie'));
	}
	
	public function area()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Monthly new Register Users")
			      ->elementLabel("Total Users")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);

		$pie  =	 Charts::create('pie', 'highcharts')
				    ->title('My nice chart')
				    ->labels(['First', 'Second', 'Third'])
				    ->values([5,10,20])
				    ->dimensions(1000,500)
					->responsive(true);
					
		$area  = Charts::multi('areaspline', 'highcharts')
                       ->title('My nice chart')
                       ->colors(['#ff0000', '#ffffff'])
                       ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
                       ->dataset('visitors', [3, 4, 3, 5, 4, 10, 12]);
                       
                     return view('activity',compact('chart','pie','area'));
	}

	public function percent()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Monthly new Register Users")
			      ->elementLabel("Total Users")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);

		$pie  =	 Charts::create('pie', 'highcharts')
				    ->title('My nice chart')
				    ->labels(['First', 'Second', 'Third'])
				    ->values([5,10,20])
				    ->dimensions(1000,500)
					->responsive(true);
					
		$area  = Charts::multi('areaspline', 'highcharts')
                       ->title('My nice chart')
                       ->colors(['#ff0000', '#ffffff'])
                       ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
					   ->dataset('visitors', [3, 4, 3, 5, 4, 10, 12]);
					   
		 $percent  =   Charts::create('percentage', 'justgage')
                          ->title('My nice chart')
                          ->elementLabel('My nice label')
                          ->values([65,0,100])
                          ->responsive(true)
                          ->height(300)
                          ->width(0);
                       
                     return view('activity',compact('chart','pie','area','percent'));
	}
	

    public function add_members()
    {
		$categories=Category::all();
		$hbcs=HBC::all();

    	return view('admin.add_members',['categories'=>$categories,'hbcs'=>$hbcs]);
    }
	public function addMember(Request $request){
		$this->validate ($request, [
			'name'=> 'required',
			'id_no'=> '',
			'gender'=> 'required',
			'dob'=> 'required',
			'place_of_birth'=> 'required',
			'residence'=> 'required',
			'ministry'=> 'required',
			'phoneno'=> '',
			'email'=> 'required',
			'status'=> 'required',
			'category'=> 'required',
			'bs_group'=> 'required']);
		$events= new Member;
		$events ->name= $request->input('name');
		$events ->id_no= $request->input('id_no');
		$events ->gender= $request->input('gender');
		$events ->dob= $request->input('dob');
		$events ->place_of_birth= $request->input('place_of_birth');
		$events ->residence= $request->input('residence');
		$events ->ministry= $request->input('ministry');
		$events ->phoneno= $request->input('phoneno');
		$events ->email= $request->input('email');
		$events ->status= $request->input('status');
		$events ->category= $request->input('category');
		$events ->bs_group= $request->input('bs_group');
		$events->save()	;
		return redirect('/allMembers')-> with ('response', 'Member Added Successifully');
	}
	public function allMembers()
    {
    	$member=Member::all();

    	return view('admin.allMembers',['member'=>$member]);
		

	}
	
	public function searchs(Request $request)
    {
        $keyword=$request->input('search');
	  $member=Member::where('name', 'LIKE','%'.$keyword.'%')->get();
      return view('admin.searchmember',[ 'member'=>$member]);
	}
	
	public function searchHBC(Request $request)
    {
        $keyword=$request->input('search');
	  $member=HBC::where('hbc', 'LIKE','%'.$keyword.'%')->get();
      return view('admin.searchhbc',[ 'member'=>$member]);
	}
	public function searchAttendance(Request $request)
    {
        $keyword=$request->input('search');
	  $member=Attendance::where('dob', 'LIKE','%'.$keyword.'%')->get();
      return view('admin.searchAttendances',[ 'member'=>$member]);
	}

    public function giving_type()

    {
	  
    	return view('admin.giving_type');
    }
	public function addEvent(Request $request){
		$this->validate ($request, [
			'title'=> 'required']);
		$category= new Event;
		$category ->title= $request->input('title');
	
		$category->save()	;
		return redirect('/giving_type')-> with ('response', 'Giving Category Added Successifully');
	}

    public function add_giving()
    {
    	 $givings=Event::all();
		return view('admin.add_giving',['givings'=>$givings]);
    }
	public function addGiving(Request $request){
	$this->validate ($request, [
			'name'=> 'required',
			'phoneno'=> 'required',
			'amount'=> 'required',
			'code'=> 'required',
			'description'=> 'required']);
		$giving= new Giving;
		$giving ->name= $request->input('name');
		$giving ->phoneno= $request->input('phoneno');
		$giving ->amount= $request->input('amount');
		$giving ->code= $request->input('code');
		$giving ->description= $request->input('description');
		$giving->save()	;
		return redirect('/giving')-> with ('response', 'Giving Added Successifully');
	}
	public function giving()
    {
    	$giving=Giving::all();

    	return view('admin.giving',['giving'=>$giving]);
		

    }
    
     public function add_sundaysch()
    {
    	return view('admin.add_sundaysch');
	}
	
	public function adminlayouts()
    {
    	return view('layouts.adminlayout');
    }


     public function add_asset()
    {
    	return view('admin.add_asset');

    }
	public function addAsset(Request $request){
	$this->validate ($request, [
			'asset'=> 'required',
			'amount'=> 'required']);
		$giving= new Asset;
		$giving ->asset= $request->input('asset');
		$giving ->amount= $request->input('amount');
		$giving->save()	;
		return redirect('/asset')-> with ('response', 'Asset Added Successifully');
	}
	public function asset()
    {
    	$givings=Asset::all();
		return view('admin.asset',['givings'=>$givings]);
    }
    public function add_user()
    {
    	return view('admin.add_user');

    }

     public function addvisitor()
    {
    	return view('admin.addvisitor');

    }
	public function addVisitors(Request $request){
		$this->validate ($request, [
			'name'=> 'required',
			'gender'=> 'required',
			'dob'=> 'required',
			'place_of_birth'=> 'required',
			'residence'=> 'required',
			'ministry'=> 'required',
			'phoneno'=> '',
			'email'=> 'required']);
		$events= new Visitor;
		$events ->name= $request->input('name');
		$events ->gender= $request->input('gender');
		$events ->dob= $request->input('dob');
		$events ->place_of_birth= $request->input('place_of_birth');
		$events ->residence= $request->input('residence');
		$events ->ministry= $request->input('ministry');
		$events ->phoneno= $request->input('phoneno');
		$events ->email= $request->input('email');
		
		$events->save()	;
		return redirect('/Visitors')-> with ('response', 'Visitor Added Successifully');
	}
	public function Visitors()
    {
    	$member=Visitor::all();

    	return view('admin.Visitors',['member'=>$member]);
		

    }


	
     public function add_leader()
    {
    	return view('admin.add_leader');

    }
	public function addLeaders(Request $request){
		$this->validate ($request, [
			'name'=> 'required',
			'gender'=> 'required',
			'dob'=> 'required',
			
			'residence'=> 'required',
			'position'=> 'required',
			'phoneno'=> '',
			'email'=> 'required']);
		$events= new Leader;
		$events ->name= $request->input('name');
		$events ->gender= $request->input('gender');
		$events ->dob= $request->input('dob');
		
		$events ->residence= $request->input('residence');
		$events ->position= $request->input('position');
		$events ->phoneno= $request->input('phoneno');
		$events ->email= $request->input('email');
		
		$events->save()	;
		return redirect('/Leaders')-> with ('response', 'Leader Added Successifully');
	}
	public function Leaders()
    {
    	$member=Leader::all();

    	return view('admin.Leaders',['member'=>$member]);
		

    }
     public function addss()
    {
    	return view('admin.addss');

    }
    public function addteen()
    {
    	return view('admin.addteen');

    }
     public function change_password_admin()
    {
    	return view('admin.change_password_admin');

    }
      public function calendar()
    {
    	return view('pages.calendar');

    }
      public function add_offering()
    {
    	
    	 $offerings=Event::all();
		return view('Givings',['offerings'=>$offerings]);
		

    }
	public function addOffering(Request $request){
	$this->validate ($request, [
			'name'=> 'required',
			'phoneno'=> 'required',
			'amount'=> 'required',
			'reason'=> 'required']);
		$giving= new Offering;
		$giving ->name= $request->input('name');
		$giving ->phoneno= $request->input('phoneno');
		$giving ->amount= $request->input('amount');
		$giving ->description= $request->input('description');
		$giving ->reason= $request->input('reason');
		$giving->save()	;
		return redirect('/add_offering')-> with ('response', 'Offering Added Successifully');
	}
	 public function offering()
    {
    	$offering=Offering::all();
		return view('admin.offering',['offering'=>$offering]);

    }

     public function postsss()
    {
    	 $user_id= Auth::user()->id;
        $profile=Profile::find($user_id);
                 /*->join('profiles', 'users.id', '=', 'profiles.user_id')
                 ->select('users.*', 'profiles.*')
                 ->where(['profiles.user_id' =>$user_id])
                ->get();*/

        $posts = Post::paginate(2);       
        return view('admin.postsss', ['profile' => $profile, 'posts'=> $posts]);

    	

    }
	 
	
      public function add_sunday_offering()
    {
    	return view('admin.add_sunday_offering');

    }
	public function addOfferings(Request $request){
	$this->validate ($request, [
			'birthday'=> 'required',
			'amount'=> 'required']);
		$giving= new Sunday;
		$giving ->birthday= $request->input('birthday');
		$giving ->amount= $request->input('amount');
		$giving->save()	;
		return redirect('/sunday_offering')-> with ('response', 'Offering Added Successifully');
	}
	public function sunday_offering()
    {
    	$givings=Sunday::all();
		return view('admin.sunday_offering',['givings'=>$givings]);
		

    }
    public function read_mail()
    {
    	return view('pages.mailbox.read_mail');

    }

     public function mailbox()
    {
    	return view('pages.mailbox.mailbox');

    }

    public function compose()
    {
		$notifications = auth()->user()->unreadNotifications;

        return view('pages.mailbox.compose', compact('notifications'));

	}
	public function markNotification(Request $request)
{
    auth()->user()
        ->unreadNotifications
        ->when($request->input('id'), function ($query) use ($request) {
            return $query->where('id', $request->input('id'));
        })
        ->markAsRead();

    return response()->noContent();
}

     public function addPosts()
    {
            $categories=Category::all();

    return view('admin.addPosts',['categories'=>$categories]);

    }
      public function addPost(Request $request){
    $this->validate($request,[
    'post_title'=> 'required',
    'post_body'=> 'required',
    'category_id'=> 'required',
    'post_image'=> 'required',

   ]);
    $posts=new Post;
    $posts->post_title = $request->input('post_title');
    $posts->user_id = Auth::user()->id;
    $posts->post_body = $request->input('post_body');
    $posts->category_id = $request->input('category_id');


    if (Input::hasFile('post_image')) {
        $file= Input::file('post_image');
        $file->move(public_path(). '/posts/',
        $file->getClientOriginalName());        
        $url=URL::to("/") . '/posts/' .
                $file->getClientOriginalName();

         }
         $posts->post_image=$url;
            $posts->save();
            return redirect('/home')->
            with('response', 'Post Published successifully');

    }

    public function index()
    {
        /*
        $employee = DB::table('employees')
                    ->join('genders', 'genders.id', '=', 'employees.gender_id')
                    ->join('positions', 'positions.id', '=', 'employees.position_id')
                    ->get();

                    $gender = DB::table('genders')
                    ->get();

        $position = DB::table('positions')
                    ->get();

        return view('home', ['employees' => $employee , 'genders' => $gender , 'positions' => $position]);

         $user_id=Auth::user()->id;
      $profile=Profile::find($user_id);
*/
        $user_id= Auth::user()->id;
        $profile=Profile::find($user_id);
                 /*->join('profiles', 'users.id', '=', 'profiles.user_id')
                 ->select('users.*', 'profiles.*')
                 ->where(['profiles.user_id' =>$user_id])
                ->get();*/

        $posts = Post::paginate(2);       
        return view('postsss', ['profile' => $profile, 'posts'=> $posts]);

    }

	
      public function indexed()
    {
    	return view('admin.indexed');
     }

	 public function Events()
    {
    	return view('Events');
     }

	 public function give()
    {
    	return view('admin.give');


     }
	 public function edit($post_id){

   	 $categories=Category::all();
   	 $posts= Post::find($post_id);
   	 $category=Category::find($posts->category_id);
   	 return view('posts.edit', ['categories'=>$categories,'posts'=>$posts, 'category'=>$category]);
   }
   public function editMembers($id="")
    {
    	
		$categories=Category::all();
		$events= Member:: find($id);
		
    	return view('admin.editMembers',compact('categories', 'events', 'id'));
		

    }
   public function editMember(Request $request, $id){

   	$this->validate ($request, [
			'name'=> 'required',
			'id_no'=> '',
			'gender'=> 'required',
			'dob'=> 'required',
			'place_of_birth'=> 'required',
			'residence'=> 'required',
			'ministry'=> 'required',
			'phoneno'=> '',
			'email'=> 'required',
			'status'=> 'required',
			'category'=> 'required']);
		
		$events= Member::find($id);
		$events ->name= $request->get('name');
		$events ->id_no= $request->get('id_no');
		$events ->gender= $request->get('gender');
		$events ->dob= $request->get('dob');
		$events ->place_of_birth= $request->get('place_of_birth');
		$events ->residence= $request->get('residence');
		$events ->ministry= $request->get('ministry');
		$events ->phoneno= $request->get('phoneno');
		$events ->email= $request->get('email');
		$events ->status= $request->get('status');
		$events ->category= $request->get('category');
		

   	     $data=array(
   	     	'name' => $events->name,
   	     	'id_no' => $events->id_no,
			'gender' => $events->gender,
		    'dob' => $events->dob,
            'place_of_birth' => $events->place_of_birth,
			'residence' => $events->residence,
   	     	'ministry' => $events->ministry,
			'phoneno' => $events->phoneno,
		    'email' => $events->email,
            'status' => $events->status,
			'category' => $events->category
        );
			

			Member::where('id')
			->update($data);
   			$events->update();
   			return redirect('/allMembers')->
   			with('response', 'Member updated successifully');

   }
  
  public function deletes($id){
  	
  	Leader::where('id',$id)
	->delete();
	return redirect('/Leaders')->with('response', 'Leader Deleted successifully');
  }

   public function delete1($id){
  	
  	Member::where('id',$id)
	->delete();
	return redirect('/allMembers')->with('response', 'Member Deleted successifully');
  }

  public function delete2($id){
  	
  	Sunday::where('id',$id)
	->delete();
	return redirect('/sunday_offering')->with('response', 'Sunday Offering Deleted successifully');
  }
   public function destroys($id){
  	
  	Giving::where('id',$id)
	->delete();
	return redirect('/giving')->with('response', 'Giving Deleted successifully');
  }

   public function dests($id){
  	
  	Asset::where('id',$id)
	->delete();
	return redirect('/asset')->with('response', 'Asset Deleted successifully');
  }


   public function post(){
   	$categories=Category::all();

   	return view('posts.post',['categories'=>$categories]);
   }

    public function Event(){
   	

   	return view('admin.Event');
   }
   public function addEvents(Request $request){
   	$this->validate($request,[
   	   'post_title'=> 'required',
	   'post_body'=> 'required',
	   'venue'=> 'required',
	   'time'=> 'required'
   	
   	

   ]);
   	$posts=new Eventss;
   	$posts->post_title = $request->input('post_title');
   	$posts->user_id = Auth::user()->id;
	$posts->post_body = $request->input('post_body');
	$posts->venue = $request->input('venue');
	$posts->time = $request->input('time');


   	

   			$posts->save();
   			return redirect('/Event')->
   			with('response', 'Event Published successifully');


   }
   public function edit_event($event_id){

	
	$posts= Eventss::find($event_id);
	
	return view('posts.edit', ['posts'=>$posts]);
}

public function editEvent(Request $request, $event_id){

   $this->validate($request, [
    'post_title'=> 'required',
	   'post_body'=> 'required',
	   'venue'=> 'required',
	   'time'=> 'required'
   	
   	

   ]);
   	$posts=new Eventss;
   	$posts->post_title = $request->input('post_title');
   	$posts->user_id = Auth::user()->id;
	$posts->post_body = $request->input('post_body');
	$posts->venue = $request->input('venue');
	$posts->time = $request->input('time');


		$data=array(
			'post_title' => $posts->post_title,
			'user_id' => $posts->user_id,
		'post_body' => $posts->post_body,
		'venue' => $posts->venue,
		'time' => $posts->time
	);
		

	Eventss::where('id', $event_id)
		->update($data);
		   $posts->update();
		   return redirect('/Event')->
		   with('response', 'Event updated successifully');

}
public function deleteEvent($event_id){
	Eventss::where('id', $event_id)
  ->deleteEvent();
  return redirect('/Event')->
		   with('response', 'Event Deleted successifully');
}
   
        public function activity()
    {
        return view('activity');
	}
	
	public function indexGiving()
    {
    	return view('give.index');
	}
	
	public function add_message()
    {
    	return view('admin.add_message');
	}
	public function sms(Request $request)
    {
		$api_key="11c72888";
        $api_secret="ANz4heWR3uRI1S1z";
		$basic  = new \Nexmo\Client\Credentials\Basic($api_key, $api_secret);
		$client = new \Nexmo\Client($basic);
		
		try {
			$message = $client->message()->send([
				'to' => +254718535456,
				'from' => 'Jonathan Laravel',
				'text' => 'A text message sent using Laravel SMS API'
			]);
			$response = $message->getResponseData();
		
			if($response['messages'][0]['status'] == 0) {
				echo "The message was sent successfully\n";
			} else {
				echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
			}
		} catch (Exception $e) {
			echo "The message was not sent. Error: " . $e->getMessage() . "\n";
		}
	return redirect('admin.add_message')->
   			with('response', 'Message Send successifully');
	}


	
	//members 


 public function join_BS()
    {
    	$categories=BS::all();

	return view('admin.join_BS',['categories'=>$categories]);
	}
	public function joinBS(Request $request)
    {
	$this->validate ($request, [
		'name'=> 'required',
		'gender'=> 'required',
		'dob'=> 'required',
		'bs_group'=> 'required',
		'phoneno'=> '',
		'email'=> 'required',
		'residence'=> 'required',
		'status'=> 'required',
		'position'=> 'required'
		]);
	$events= new Joinbs;
	$events ->name= $request->input('name');
	$events ->gender= $request->input('gender');
	$events ->dob= $request->input('dob');
	$events ->bs_group= $request->input('bs_group');
	$events ->phoneno= $request->input('phoneno');
	$events ->email= $request->input('email');
	$events ->residence= $request->input('residence');
	$events ->status= $request->input('status');
	$events ->position= $request->input('position');
	$events->save()	;
	return redirect('/join_BS')-> with ('response', 'Your Request has been Received, You will be contacted for further information');
}
public function BSRequest()
{
	$member=Joinbs::all();

	return view('admin.BSRequest',['member'=>$member]);
	

}


	public function register_for_Baptism()
    {
    	return view('admin.register_for_Baptism');
	}

	public function join_Ministry()
    {
		$categories=Category::all();

	return view('admin.join_Ministry',['categories'=>$categories]);
    
	}

	public function joinMinistry(Request $request)
    {
	$this->validate ($request, [
		'name'=> 'required',
		'gender'=> 'required',
		'dob'=> 'required',
		'ministry'=> 'required',
		'phoneno'=> '',
		'email'=> 'required',
		'status'=> 'required'
		]);
	$events= new Joinministry;
	$events ->name= $request->input('name');
	$events ->gender= $request->input('gender');
	$events ->dob= $request->input('dob');
	$events ->ministry= $request->input('ministry');
	$events ->phoneno= $request->input('phoneno');
	$events ->email= $request->input('email');
	$events ->status= $request->input('status');
	$events->save()	;
	return redirect('/join_Ministry')-> with ('response', 'Your Request has been Received, You will be contacted for further information');
}
public function MinistryRequest()
{
	$member=Joinministry::all();

	return view('admin.MinistryRequest',['member'=>$member]);
	

}

	public function Ministries()
    {
    	return view('Ministries');
	}

	public function add_new_HBC()
    {
    	return view('admin.add_new_HBC');
	}

	public function addHBC(Request $request){
		$this->validate ($request, [
			'hbc'=> 'required']);
		$category= new HBC;
		$category ->hbc= $request->input('hbc');
	
		$category->save()	;
		return redirect('/add_new_HBC')-> with ('response', 'HBC Added Successifully');
	}

	public function add_member_to_bs()
    {
    	return view('admin.add_member_to_bs');
	}

	public function add_new_Attendance()
    {
    	return view('admin.add_new_Attendance');
	}

	public function addNewAttendance(Request $request)
    {
	$this->validate ($request, [
	    'dob'=> 'required',
		'service'=> 'required',
		
		'male_adult'=> 'required',
		'female_adult'=> 'required',
		'youths'=> 'required',
		'sunday_sch'=> 'required',
		'total'=> 'required'
		]);
	$events= new Attendance;
	$events ->dob= $request->input('dob');
	$events ->service= $request->input('service');
	
	$events ->male_adult= $request->input('male_adult');
	$events ->female_adult= $request->input('female_adult');
	$events ->youths= $request->input('youths');
	$events ->sunday_sch= $request->input('sunday_sch');
	$events ->total= $request->input('total');
	$events->save()	;
	return redirect('/Attendances')-> with ('response', 'Attendance Added Successifully');
}
public function Attendances()
{
	$member=Attendance::all();

	return view('admin.Attendances',['member'=>$member]);
	

}

	public function add_Baptised_member()
    {
    	return view('admin.add_Baptised_member');
	}

	public function addBaptisedMember(Request $request)
    {
	$this->validate ($request, [
		'name'=> 'required',
		'gender'=> 'required',
		'dob'=> 'required',
		'dbaptised'=> 'required',
		'phoneno'=> '',
		'email'=> 'required'
		]);
	$events= new BaptisedMember;
	$events ->name= $request->input('name');
	$events ->gender= $request->input('gender');
	$events ->dob= $request->input('dob');
	$events ->dbaptised= $request->input('dbaptised');
	$events ->phoneno= $request->input('phoneno');
	$events ->email= $request->input('email');
	$events->save()	;
	return redirect('/BaptisedMembers')-> with ('response', 'Member Added Successifully');
}
public function BaptisedMembers()
{
	$member=BaptisedMember::all();

	return view('admin.BaptisedMembers',['member'=>$member]);
	

}

	public function add_new_bs_group()
    {
    	return view('admin.add_new_bs_group');
	}

	public function addBSGroup(Request $request){
		$this->validate ($request, [
			'bs'=> 'required']);
		$category= new BS;
		$category ->bs= $request->input('bs');
	
		$category->save()	;
		return redirect('/add_new_bs_group')-> with ('response', 'Group Added Successifully');
	}

	public function add_new_Believer()
    {
    	return view('admin.add_new_Believer');
	}

	public function addNewBeliever(Request $request)
    {
	$this->validate ($request, [
		'name'=> 'required',
		'gender'=> 'required',
		'dob'=> 'required',
		'date'=> 'required',
		'status'=> 'required',
		'phoneno'=> '',
		'email'=> 'required'
		]);
	$events= new Believer;
	$events ->name= $request->input('name');
	$events ->gender= $request->input('gender');
	$events ->dob= $request->input('dob');
	$events ->date= $request->input('date');
	$events ->phoneno= $request->input('phoneno');
	$events ->status= $request->input('status');
	$events ->email= $request->input('email');
	$events->save()	;
	return redirect('/NewBelievers')-> with ('response', 'New Believer Added Successifully');
}
public function NewBelievers()
{
	$member=Believer::all();

	return view('admin.NewBelievers',['member'=>$member]);
	

}


public function notices(){
   	

	return view('admin.notices');
}
public function addNotices(Request $request){
	$this->validate($request,[
	   'post_title'=> 'required',
	'post_body'=> 'required',
	
	
	

]);
	$posts=new Notice;
	$posts->post_title = $request->input('post_title');
    $posts->post_body = $request->input('post_body');
 

	

			$posts->save();
			return redirect('/notices')->
			with('response', 'Notices Published successifully');


}
public function allNotices(){
   	
	$posts=Notice::all();
	return view('admin.allNotices',['posts'=>$posts]);
}

   
}

