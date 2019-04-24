<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\member_tb;
use App\offers_tb;
use App\vendor_tb;
use App\category_tb;
use App\favourite;
use App\BusLocation;
use App\Notitification;

use DB;

class PublicController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:member');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $favourites = favourite::all();

        $end_date = date("Y-m-d");
       // $time = date('H:i');
        $approved = offers_tb::WHERE([
            ['status', '=', 'approved'],
            ['end_date', '>=', $end_date],
            ['featured', '<>', 'Yes'],
        ])->get();

        $all = offers_tb::WHERE([
          ['status', '=', 'approved'],
          ['end_date', '>=', $end_date],
       ])->orderBy('start_date', 'ASC')->get();

        $featured = offers_tb::WHERE([
            ['status', '=', 'approved'],
            ['end_date', '>=', $end_date],
            ['featured', '=', 'Yes'],

           ])->orderBy('start_date', 'ASC')->take(3)->get();



        //$approved = vendor_tb::WHERE('status', 'approved')->get();
        // $pending = vendor_tb::WHERE('status', 'Pending')->get();
        // $blocked = vendor_tb::WHERE('status', 'Blocked')->get();
        //return view('index')->with(['approved' => $approved, 'featured' => $featured, 'favourites' => $favourites]);
        return view('index', compact('approved','featured','favourites','all'));
         //return view('home');
        // return view('index');
    }


      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function profile_page()
    {
      return view('profile');
    }


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redeem_history_page()
    {
      return view('offer_history');
    }

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function social_link_page()
    {
      return view('social_media');
    }

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function changepassword_page()
    {
      return view('change_password');
    }
    

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function favourite_offers_page()
    {
      $favourites = favourite::all();

      $end_date = date("Y-m-d");

      $all = offers_tb::WHERE([
        ['status', '=', 'approved'],
        ['end_date', '>=', $end_date],
     ])->get();

      return view('favourite_offers', compact('favourites','all'));
      
    }
    

    //############   SINGLE PAGE ##############################//
     
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_single($slug)
    {   
        $end_date = date("Y-m-d");
        //all favorite
        $favourites = favourite::all();
        // single offer
        $offer = offers_tb::WHERE('slug', $slug)->get();
        // related offer
        $related = offers_tb::WHERE([
          ['status', '=', 'approved'],
          ['end_date', '>=', $end_date],
        ])->orderBy('start_date', 'ASC')->take(4)->get();
         
        // all location

        $locations = BusLocation::all();

        //return $offer;
        return view('offer_single',compact('offer','favourites','related','locations'));

    }

    //############   SINGLE PAGE ##############################//

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function favourite(Request $request)
    {
     
     try{

      $member_id = $request->input('member_id');
      $offer_id = $request->input('offer_id');

      $id = favourite::where(['member_id' => $member_id, 'offer_id' => $offer_id])->get();
      $check = count($id);

      if($check < 1){

          $favourite = new favourite;
          // binding
          $favourite->member_id = $request->input('member_id');
          $favourite->offer_id = $request->input('offer_id');
          // SAVE
          $favourite->save();
          return "success";

      }else{

       for ($i=0; $i < $check; $i++) { 
        $id[$i]->delete(); 
       }
      
        return "deleted";
      }

   } catch (\Exception $e) {
    return $e;
  }

    }


    ########## PROFILE #################
     

    //  EDIT PROFILE
    public function updateProfile(Request $request){

      try{
        $id = auth()->user()->id;
        $profile = member_tb::find($id);
  
        
        $profile->fname = $request->input('fname');
        $profile->sname = $request->input('lname');
        $profile->phone_number = $request->input('pnumber');
        $profile->dob = $request->input('dob');
        $profile->details = $request->input('details');
        $profile->email = $request->input('email');

        // $member->points = $request->input('point');
        // $member->level = $request->input('level');
        // $member->status = $request->input('status');

        // SAVE
        $profile->save();
        return redirect()->intended('/profile')->with(['success' => 'Record  Updated Succefully.']);
        //return view('profile')->with(['success' => 'Record  Updated Succefully.']);
       } catch (\Exception $e) {
         //return $e;
        return view('profile')->with(['error' => 'Error, Please check and try again.']);
         }

    }
     

    // CHANGE PASSWORD

    public function changePassword(Request $request){

      $this->validate($request, [
        'cpassword'   => 'required|min:6',
        'password' => 'required|min:6'
    ]);

      $password = $request->input('password');
      $cpassword = $request->input('cpassword');
      if($password != $cpassword ){
        return view('change_password')->with(['error' => 'Error, Password Mismatched.']);
      }else{
      
      try{

        // FIND A RECORD
        $id = auth()->user()->id;
        $profile = member_tb::find($id);
        // BIND
        $profile->password = Hash::make($password);
        // SAVE
        $profile->save();
        //return redirect()->intended('/change-password')->with(['success' => 'Record  Updated Succefully.']);
        return view('change_password')->with(['success' => 'Record  Updated Succefully.']);

       } catch (\Exception $e) {
         //return $e;
        return view('change_password')->with(['error' => 'Error, Please check and try again.']);
       }
     
      }

    }

    
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function confirm_page()
    {
      return view('confirm_redeemed');
    }

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redeemed_page()
    {
      return view('offer_redeemed');
    }




    /*

      NOTIFICATION


    */

    public function unseenNotification(Request $request)
    {
     
     try{

        // UNSEEN NOTIFICATION
       $unseen = Notitification::WHERE([
        ['is_unread', '=', 0],
        ['recipient_id', '=', auth()->user()->id],
      ])->get();
      return  count($unseen);

    } catch (\Exception $e) {
      return $e;
    // return view('change_password')->with(['error' => 'Error, Please check and try again.']);
    }

  }

  public function notification(Request $request)
  {
   try{
     $result = "";
      //  NOTIFICATION
     $notifications = Notitification::WHERE([
      ['type', '=', "member"],
      ['recipient_id', '=', auth()->user()->id],
    ])->orderBy('id', 'DESC')->take(5)->get();

    foreach ($notifications as $key => $notification) {
      $result .='<div class="row px-3">
      <div class="col-12">
        <a href="'.$notification["href"].'"  onclick="readNotification('.$notification["id"].')">
        <h5 class="mb-0 wc">'.strtoupper($notification["title"]).'</h5>
        <p class="wc mb-0">'.ucwords($notification["body"]).'</p>
        <small class="wc2">'.$notification["created_at"].'</small>
        </a>
      </div>
    </div>
     <hr>';
    }

    return  $result;

  } catch (\Exception $e) {
    return $e;
  // return view('change_password')->with(['error' => 'Error, Please check and try again.']);
  }

}


public function notification_mobile(Request $request)
{
 try{
    //  NOTIFICATION
   $notifications = Notitification::WHERE([
    ['recipient_id', '=', auth()->user()->id],
  ])->orderBy('id', 'DESC')->take(5)->get();

  return view('notifications', compact('notifications'));
} catch (\Exception $e) {
  return $e;
// return view('change_password')->with(['error' => 'Error, Please check and try again.']);
}

}


public function readNotification(Request $request)
{
 try{
    //  READ A NOTIFICATION
   $id = $request->input('id');
   $notification = Notitification::find($id);
   $notification->is_unread = 1;
   $notification->save();
   return "success";

} catch (\Exception $e) {
  return $e;
// return view('change_password')->with(['error' => 'Error, Please check and try again.']);
}

}

// MAILING

public function mail(){

  \Mail::send('email.member_email',array('Test' => 'test user'), function($message){
 $message->to('dabdulmanan@gmail.com','Test')->subject('Welcome! Mail is Sent!');
});
echo "Mail Sent Successfully...!";
}

}
