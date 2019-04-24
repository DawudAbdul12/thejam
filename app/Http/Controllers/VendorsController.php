<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\vendor_tb;
use App\BusLocation;
use DB;

class vendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendors = vendor_tb::all();
        $approved = vendor_tb::WHERE('status', 'approved')->get();
        $pending = vendor_tb::WHERE('status', 'Pending')->get();
        $blocked = vendor_tb::WHERE('status', 'Blocked')->get();
        return view('admin.vendor.all_vendors')->with(['vendors' => $vendors,'approved' => $approved,'pending' => $pending,'blocked' => $blocked]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
       return view('admin.vendor.add_vendor');

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
        try{

       $vendor = new vendor_tb;
       $location = new BusLocation;
      // $rememberToken = time().$request->input('pemail');

       $rememberToken = Hash::make(time()).Hash::make($request->input('pemail'));
       $rememberToken = $this->slug($rememberToken);

       // $this->validate($request, [
       //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       // ]);
   
       if ($request->hasFile('image')) {
           
           $image = $request->file('image');
           $image_name = time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('/ihg');
           $image->move($destinationPath, $image_name);

       }else{

          $image_name = "";

       }

       $vendor->fname = $request->input('fname');
       $vendor->lname = $request->input('lname');
       $vendor->p_email = $request->input('pemail');
       $vendor->image = $image_name;
       $vendor->p_phone = $request->input('p_phone');
       $vendor->name_business = $request->input('name_business');
       $vendor->slug = $request->input('name_business');
       $vendor->registered_company_entitie = $request->input('registered_company_entitie');
       $vendor->business_email = $request->input('business_email');
       $vendor->registered_address = $request->input('registered_address');
       $vendor->details = $request->input('details');
       $vendor->password = "";
       $vendor->status = $request->input('status');
       $vendor->accept = $request->input('accept');
       $vendor->remember_token =  $rememberToken;

       // SAVE
       $vendor->save();
       ##### GET CURRENT VENDER'S ID FOR LOCATION(S)  ###########
       
       // $id = vendor_tb::select('id')->where('remember_token', $rememberToken)->get();
      $id = vendor_tb::where('remember_token', $rememberToken)->get(['id']);
      $id = $id[0]['id'];

      ######## CURRENT ID BLOCK ################


       ######## START LOCATION ################

    //    $subject = request('subject');
    //    $grade = request('grade');

        $bus_address = explode(',', $request->input('bus_address'));
        $latitude = explode(',', $request->input('latitude'));
        $longitude = explode(',', $request->input('longitudes'));
        // $bus_address = $request->input('bus_address');
        // $latitude = $request->input('latitude');
        // $longitude = $request->input('longitudes');

        // parse_str($bus_address, $bus_addresses);
        // parse_str($latitude, $latitudes);
        // parse_str($longitude, $longitudes);

    //    parse_str($grade, $grades);

       foreach ($bus_address as $key => $bus_addres) {
           BusLocation::create([
               'bus_location' => $bus_address[$key],
               'long' => $longitude[$key],
               'latitude' => $latitude[$key],
               'vendor_id' => $id
           ]);
       }


    //    for($x =0;$x < count($request->input('bus_address'));$x++){

    //    $location->bus_location = $request->input('bus_address')->$x;
    //    $location->long = $request->input('latitude')->$x;
    //    $location->latitude = $request->input('longitude')->$x;
    //    $location->vendor_id = $id;
    //    $location->save();

    //     } 

        ######## END LOCATION  ################

        // EMAIL 
        $toEmail = $request->input('pemail');
        \Mail::send('email.vendor_email',array('Title' => 'Invitation', 'slug' => $rememberToken), function($message) use ($toEmail){
        $message->to($toEmail,'Invitation')->subject('Welcome! Invitation From Jamjar!');
        });
 
       return "success";


      // return $bus_address[1];
       //return view('admin.vendor.add_vendor')->with(['success' => 'You Have Succefully Added A Member.']);
      } catch (\Exception $e) {
       return $e; //"error";//view('admin.vendor.add_vendor')->with(['error' => 'Member Already Exists']);
      // return "Error";
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
       
        $vendor = vendor_tb::find($id);
        return view('admin.vendor.edit_vendor')->with('vendor', $vendor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = vendor_tb::find($id);
        $location = BusLocation::WHERE('vendor_id', $id)->get();
        return view('admin.vendor.edit_vendor')->with(['vendor' => $vendor,'locations' => $location]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request)
    {      
        // 
        try{
            $id = $request->input('id');
            $vendor =  vendor_tb::find($id);
            $rememberToken = Hash::make(time()).Hash::make($request->input('pemail'));
            $rememberToken = $this->slug($rememberToken);
     
            // $this->validate($request, [
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
        
            if ($request->hasFile('image')) {
                
                $image = $request->file('image');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/ihg');
                $image->move($destinationPath, $image_name);
     
            }else{
     
               $image_name = "";
     
            }
     
            $vendor->fname = $request->input('fname');
            $vendor->lname = $request->input('lname');
            $vendor->p_email = $request->input('pemail');
            $vendor->image = $image_name;
            $vendor->p_phone = $request->input('p_phone');
            $vendor->name_business = $request->input('name_business');
            $vendor->slug = $request->input('name_business');
            $vendor->registered_company_entitie = $request->input('registered_company_entitie');
            $vendor->business_email = $request->input('business_email');
            $vendor->registered_address = $request->input('registered_address');
            $vendor->details = $request->input('details');
           // $vendor->password = $rememberToken;
            $vendor->status = $request->input('status');
            $vendor->accept = $request->input('accept');
            $vendor->remember_token =  $rememberToken;
     
            // SAVE
            $vendor->save();

            // UPDATE LOCATION
            if($request->input('bus_address') != null ){
            $bus_address = explode(',', $request->input('bus_address'));
            $latitude = explode(',', $request->input('latitude'));
            $longitude = explode(',', $request->input('longitudes'));
           
                foreach ($bus_address as $key => $bus_addres) {
                    BusLocation::create([
                        'bus_location' => $bus_address[$key],
                        'long' => $longitude[$key],
                        'latitude' => $latitude[$key],
                        'vendor_id' => $id
                    ]);
                }
            }
                
            return "Updated";
            //return view('admin.vendor.add_vendor')->with(['success' => 'You Have Succefully Added A Member.']);
           } catch (\Exception $e) {
            return  $e; //view('admin.vendor.add_vendor')->with(['error' => 'Member Already Exists']);
           // return "Error";
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
  
    
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status($status)
    {
         //
           
        $vendors = vendor_tb::all();
        $status = vendor_tb::WHERE('status',  $status)->get();
        $approved = vendor_tb::WHERE('status', 'approved')->get();
        $pending = vendor_tb::WHERE('status', 'Pending')->get();
        $blocked = vendor_tb::WHERE('status', 'Blocked')->get();
        return view('admin.vendor.status_vendor')->with(['vendors' => $vendors,'approved' => $approved,'pending' => $pending,'blocked' => $blocked,'status' => $status]);

        // $members = member_tb::all();
        // $status = member_tb::WHERE('status', $status)->get();
        // $approved = member_tb::WHERE('status', 'approved')->get();
        // $pending = member_tb::WHERE('status', 'Pending')->get();
        // $blocked = member_tb::WHERE('status', 'Blocked')->get();
        //return view('admin.members.status_membs')->with(['members' => $members,'approved' => $approved,'pending' => $pending,'blocked' => $blocked,'status' => $status]);
    }
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_dash($id)
    {
        $vendor = vendor_tb::find($id);
        return view('admin.vendor.dashboard')->with('vendor', $vendor);
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
        $vendor = vendor_tb::WHERE('remember_token', $token)->get();
        $checker = count($vendor);
        if($checker > 0){
         return view('vendor/account_vendor')->with(['token' => $token]);
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
          return view('/vendor/account_vendor')->with(['error' => 'Error, Password Mismatched.','token' => $token]);
        }else{
        
        try{
  
          // FIND A RECORD
          $vendor = vendor_tb::WHERE('remember_token', $token)->get();
          $rememberToken = Hash::make(time()).Hash::make($password);
          $rememberToken = $this->slug($rememberToken);

          // BIND
          $vendor['0']->password = Hash::make($password);
          $vendor['0']->remember_token = $rememberToken;

          // SAVE
          $vendor['0']->save();
        return redirect()->intended('/login/vendor');
       
  
         } catch (\Exception $e) {
          // return $e;
          return view('/vendor/account_vendor')->with(['error' => 'Error, Please check and try again.', 'token' => $token]);
         }
       
        }
  
      }








}
