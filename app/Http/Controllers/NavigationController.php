<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Offering;
use App\Event;
use App\Prayer;
use App\Eventss;

class NavigationController extends Controller
{
    public function Fellowships()

    {
     
  return view('Fellowships');

	}

	 public function Events()

    {
		$posts=Eventss::all();

   	 return view('Events',['posts'=>$posts]);
     
 	}

	
	 public function Pastors()

    {
		

   	 return view('Pastors');
     
 	}
	
	 public function Vission()

    {
	
   	 return view('Vission');
     
 	}

	 public function Contact()

    {
	
   	 return view('Contact');
     
 	}

	
	 public function Givings()

    {
	$offerings=Event::all();
   	 return view('Givings',['offerings'=>$offerings]);
     
 	}
	  
	public function addOfferingss(Request $request){
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
		return redirect('/Givings')-> with ('response', 'You Have Successifully Your Offering');
	}
	 public function offering()
    {
    	$offering=Offering::all();
		return view('admin.offering',['offering'=>$offering]);

    }

	public function HomePage()

    {
	
   	 return view('HomePage');
     
 	}

	public function Sermons()

    {
	
   	 return view('Sermons');
     
 	}
	public function Prayer()

    {
	
   	 return view('Prayer');
     
 	}
	public function Prayerss(Request $request){
	$this->validate ($request, [
			'name'=> 'required',
			'phoneno'=> 'required',
			'email'=> 'required',
			'description'=> 'required']);
		$prayer= new Prayer;
		$prayer ->name= $request->input('name');
		$prayer ->phoneno= $request->input('phoneno');
		$prayer ->email= $request->input('email');
		$prayer ->description= $request->input('description');
		
		$prayer->save()	;
		return redirect('/Prayer')-> with ('response', 'Your Request Has Been Successifully Send. You Will Be Contacted For Furter Information. Thank You!');
	}
	 public function Prayers()
    {
    	$offering=Prayer::all();
		return view('admin.Prayers',['offering'=>$offering]);

    }
	public function welcome()
    {
      return view('welcome');
    }
	
	public function SundayServices()

    {
	
   	 return view('SundayServices');
	 }

	 public function Praise_and_Worship()

    {
	
   	 return view('Praise_and_Worship');
	 }

	 public function Ushering()

    {
	
   	 return view('Ushering');
	 }
	 public function Catering()

    {
	
   	 return view('Catering');
	 }
	 public function Choir()

	 {
	 
		 return view('Choir');
	  }
	  public function Media_and_IT()

	  {
	  
		  return view('Media_and_IT');
	   }
	   public function Sunday_School()

	   {
	   
		   return view('Sunday_School');
		}
		public function youths()

		{
		
			return view('youths');
		 }
		 public function women()
	
		 {
		 
			 return view('women');
		  }
		  public function missions()
	
		  {
		  
			  return view('missions');
		   }
		   public function Evangelism()
	
		   {
		   
			   return view('Evangelism');
			}
			public function Counselling()

		{
		
			return view('Counselling');
		 }
}

