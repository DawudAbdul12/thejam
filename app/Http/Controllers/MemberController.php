<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\member_tb;
use DB;

class MemberController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = member_tb::all();
        $approved = member_tb::WHERE('status', 'approved')->get();
        $pending = member_tb::WHERE('status', 'Pending')->get();
        $blocked = member_tb::WHERE('status', 'Blocked')->get();
        return view('admin.members.all_membs')->with(['members' => $members,'approved' => $approved,'pending' => $pending,'blocked' => $blocked]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $login_email = $request->input('login_email');
        $login_pass = $request->input('login_pass');
        return $login_email;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.members.add_mem');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   try {
        
        //
        $member = new member_tb;
        $rememberToken = Hash::make(time()).Hash::make($request->input('email'));
        $rememberToken = $this->slug($rememberToken);

        if($request->input('point') == ""){
           $point = 0.0;
        }else{   $point = $request->input('point');  }

        if($request->input('level') == ""){
            $level = 0;
         }else{   $level = $request->input('level');  }

         if($request->input('pass') == ""){
            $password = "";
         }else{
            $password = $request->input('pass');
         }

        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
        if ($request->hasFile('image')) {
            
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/profile_pic');
            $image->move($destinationPath, $image_name);

            // $this->save();
            // return back()->with('success','Image Upload successfully');

        }else{
           $image_name = "";
        }

        $member->fname = $request->input('fname');
        $member->sname = $request->input('lname');
        $member->phone_number = $request->input('pnumber');
        $member->dob = $request->input('dob');
        $member->profile_pic = $image_name;
        $member->points = $point;
        $member->level = $level;
        $member->details = $request->input('details');
        $member->email = $request->input('email');
        $member->password = $password;
        $member->status = $request->input('status');
        $member->remember_token =  $rememberToken;
        // SAVE
        $member->save();

        // EMAIL 
        $toEmail = $request->input('email');
        \Mail::send('email.member_email',array('Title' => 'Invitation', 'slug' => $rememberToken), function($message) use ($toEmail){
        $message->to($toEmail,'Invitation')->subject('Welcome! Invitation From Jamjar!');
        });

        return view('admin.members.add_mem')->with(['success' => 'You Have Succefully Added A Member.']);
      } catch (\Exception $e) {
        return $e->getMessage();
        //return view('admin.members.add_mem')->with(['error' => 'Member Already Exists']);
        // return view('admin.category.categories')->with(['categories' => $categories, 'success' => $e->getMessage()]); ;
      }
       
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //return view("admin.members.dashboard");
        //
        $member = member_tb::find($id);
        return view('admin.members.edit_member')->with('member', $member);
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
        $member = member_tb::find($id);
        return view('admin.members.edit_member')->with('member', $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
         try{
         $member = member_tb::find($id);
        
         // $this->validate($request, [
         //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         // ]);
     
         if ($request->hasFile('image')) {
             
             $image = $request->file('image');
             $image_name = time().'.'.$image->getClientOriginalExtension();
             $destinationPath = public_path('/profile_pic');
             $image->move($destinationPath, $image_name);
            
             $member->profile_pic = $image_name;
 
             // $this->save();
             // return back()->with('success','Image Upload successfully');
 
         }
         
         $member->fname = $request->input('fname');
         $member->sname = $request->input('lname');
         $member->phone_number = $request->input('pnumber');
         $member->dob = $request->input('dob');
         $member->points = $request->input('point');
         $member->level = $request->input('level');
         $member->details = $request->input('details');
         $member->email = $request->input('email');
         $member->status = $request->input('status');
         
         // SAVE
         $member->save();
         $member = member_tb::find($id);
         return view('admin.members.edit_member')->with(['member' => $member, 'success' => 'Record  Updated Succefully.']);

        } catch (\Exception $e) {
         return view('admin.members.edit_member')->with(['member' => $member, 'error' => 'Error, Please check and try again.']);
            //return view('admin.members.add_mem')->with(['error' => 'Member Already Exists']);
            //   return view('admin.category.categories')->with(['categories' => $categories, 'success' => $e->getMessage()]); ;
          }
 
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
    }

    // USER DEFINE FUNCTION


   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status($status)
    {
         //
        $members = member_tb::all();
        $status = member_tb::WHERE('status', $status)->get();
        $approved = member_tb::WHERE('status', 'approved')->get();
        $pending = member_tb::WHERE('status', 'Pending')->get();
        $blocked = member_tb::WHERE('status', 'Blocked')->get();
        return view('admin.members.status_membs')->with(['members' => $members,'approved' => $approved,'pending' => $pending,'blocked' => $blocked,'status' => $status]);
    }
     

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_dash($id)
    {
        $member = member_tb::find($id);
        return view('admin.members.dashboard')->with('member', $member);
    }


    function slug($slug){

        $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
        $spacesDuplicateHypens = '/[\-\s]+/';
        $slug = preg_replace($lettersNumbersSpacesHypens,'',mb_strtolower($slug,'UTF-8'));
        $slug = preg_replace($spacesDuplicateHypens, '-', $slug);
        $slug = trim($slug, '-');
        return $slug;
        
    }




     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountVerification($token)
    {
       //return "Welldone";
        //
        $member = member_tb::WHERE('remember_token', $token)->get();
        $checker = count($member);
        if($checker > 0){
         return view('account')->with(['token' => $token]);
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
        $token = $request->input('token');
        if($password != $cpassword ){
          return view('account')->with(['error' => 'Error, Password Mismatched.','token' => $token]);
        }else{
        
        try{
  
          // FIND A RECORD
          $profile = member_tb::WHERE('remember_token', $token)->get();
          $rememberToken = Hash::make(time()).Hash::make($password);
          $rememberToken = $this->slug($rememberToken);

          // BIND
          $profile['0']->password = Hash::make($password);
          $profile['0']->remember_token = $rememberToken;

          // SAVE
          $profile['0']->save();
        return redirect()->intended('/login');
        // return view('/login');
  
         } catch (\Exception $e) {
           //return $e;
          return view('account')->with(['error' => 'Error, Please check and try again.', 'token' => $token]);
         }
       
        }
  
      }


     



}
