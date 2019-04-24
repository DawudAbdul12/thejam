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
use App\User;
use DB;

class vendorDashController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("vendor.dashboard");
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {   
        
     
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        {
            try{
            // OFFER
            $offer = new offers_tb;
              // LOCATION 
            $locations = BusLocation::WHERE('vendor_id', auth()->user()->id)->get();
            // CATEGORY
            $categories = category_tb::all();
            // RATE
            $rate =0.0;
           
        
            if ($request->hasFile('image')) {
                
                $image = $request->file('image');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $image_name);
    
                // $this->save();
                // return back()->with('success','Image Upload successfully');
    
            }else{
               $image_name = "";
            }
             $slug = $this->checker_slug($request->input('name'), $old_slug = null);
            $offer->title = $request->input('name');
            $offer->slug =  $slug;
            $offer->vendor_id = auth()->user()->id;
            $offer->category_id = $request->input('category'); 
            $offer->rate = $rate;
            $offer->status = $request->input('status');
            $offer->maximum_use = $request->input('max_use');
            $offer->start_time = $request->input('start_time');
            $offer->end_time = $request->input('end_time');
            $offer->start_date = $request->input('start_date');
            $offer->end_date = $request->input('end_date');
            $offer->type= $request->input('type');
            $offer->details = $request->input('details');
            $offer->image = $image_name;
            $offer->featured= $request->input('featured');
            $offer->location = $request->input('location');
            // SAVE
            $offer->save();
              
            // |
            // |
            // | NOTIFICATION
            // | FOR MEMBERS
            // |
            // BIND PARAM
            $sender_id = auth()->user()->id;
            $title = $request->input('name');
            $body = $request->input('details');
            $href = "/offers/".$slug;

             // All approved members
             $approved = member_tb::WHERE('status', 'approved')->get();

             // loop through approved members
              foreach ($approved as $key => $member) {
               // recipient's ID
              $recipient_id = $member['id'];
              // SET VARIABLES
              $type = "member";
              // CALL NOTIFICATION FUNCTION 
              $notify = $this->notificationStore($sender_id,$type,$title,$body,$href,$recipient_id);

                }



              // All Administrators
              $administrators = user::all();
              // loop through approved members
              foreach ($administrators as $key => $administrator) {
                // recipient's ID
               $recipient_id = $administrator['id'];
               // SET VARIABLES
               $type = "administrator";
               // CALL NOTIFICATION FUNCTION 
               $notify = $this->notificationStore($sender_id,$type,$title,$body,$href,$recipient_id);
 
             }

            // |
            // |
            // | NOTIFICATION
            // |
            // |
    

         return view('vendor.offers.add_offer')->with(['success' => 'You Have Added Offer Succefully .','locations' =>  $locations,'categories' => $categories]);
         //redirect()->action('HomeController@index');
        } catch (\Exception $e) {
    
       // return $e->getMessage();
        return view('vendor.offers.add_offer')->with(['error' => 'Offer Already Exist','locations' =>  $locations,'categories' => $categories]);

        }

        }
    }


    /*
     |
     |
     | NOTIFICATION
     |
     |
    */


     function notificationStore($sender_id,$type,$title,$body,$href,$recipient_id){
        
        $notification  = new Notitification;
       // Bind param
        $notification->sender_id = $sender_id;
        $notification->type = $type;
        $notification->title = $title; 
        $notification->body = $body;
        $notification->href =  $href;
        $notification->recipient_id = $recipient_id;
        $notification->is_unread = 0;
        $notification->is_hidden = 0;
        $notification->created_time = date("Y-m-d");
        // SAVE
        $notification->save();

    }

     /*
     |
     |
     | NOTIFICATION
     |
     |
    */







    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function profile(){
        $vendor = vendor_tb::find(auth()->user()->id);
        $location = BusLocation::WHERE('vendor_id', auth()->user()->id)->get();
        return view('vendor.vendor.edit_vendor')->with(['vendor' => $vendor,'locations' => $location]);
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
          $vendors = vendor_tb::all();
          $categories = category_tb::all();
          $offer = offers_tb::find($id);
  
          // LOAD LOCATION
          // first get the vendors id 
          // to search for location under the vendor
           $vendor_id = offers_tb::select('vendor_id')->where('id', $id)->get();
           $vendors_id = $vendor_id[0]['vendor_id'];
  
          $locations = BusLocation::WHERE('vendor_id', $vendors_id)->get();
          return view('vendor.offers.edit_offer')->with(['offer'=> $offer,'vendors' =>  $vendors,'categories' => $categories,'locations' =>  $locations]);
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
            //
            $offer = offers_tb::find($id);
            $vendors = vendor_tb::all();
            $categories = category_tb::all();
          
        
            if ($request->hasFile('image')) {
                
                $image = $request->file('image');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $image_name);
                $offer->image = $image_name;
    
                
            }else{
               $image_name = "";
            }
    
            $offer->title = $request->input('name');
            $offer->slug = $this->checker_slug($request->input('name'), $request->input('slug'));
            // $offer->slug = $request->input('slug');
            //$offer->vendor_id = $request->input('vendor');
            $offer->category_id = $request->input('category'); 
            $offer->status = $request->input('status');
            $offer->maximum_use = $request->input('max_use');
            $offer->start_time = $request->input('start_time');
            $offer->end_time = $request->input('end_time');
            $offer->start_date = $request->input('start_date');
            $offer->end_date = $request->input('end_date');
            $offer->type= $request->input('type');
            $offer->details = $request->input('details');
            $offer->featured= $request->input('featured');
            $offer->location = $request->input('location');
        
            // SAVE
            $offer->save();
            $offer = offers_tb::find($id);
            // LOAD LOCATION
           $locations = BusLocation::WHERE('vendor_id', auth()->user()->id)->get();
    
        return view('vendor.offers.edit_offer')->with(['success' => 'Updated Succefully .','offer'=> $offer,'categories' => $categories,'locations' =>  $locations]);
        } catch (\Exception $e) {
         return $e->getMessage();
         //return view('admin.offers.edit_offer')->with(['error' => 'Offer Already Exist','offer' => $offer,'vendors' =>  $vendors,'categories' => $categories]);
          // return view('admin.category.categories')->with(['categories' => $categories, 'success' => $e->getMessage()]); ;
        }
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
     

    }

    /*
    |
    |
    |   OFFER SECTION
    |
    |
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offerCreate()
    {
        // CATEGORY
        $categories = category_tb::all();
         // LOCATION 
        $locations = BusLocation::WHERE('vendor_id', auth()->user()->id)->get();
        //$locations = BusLocation::select('bus_locations')->where('vendor_id', auth()->user()->id)->get();
        return view('vendor.offers.add_offer')->with(['categories' => $categories, 'locations' => $locations] );
    }

    public function editOffer($id){
                 //
        $vendors = vendor_tb::all();
        $categories = category_tb::all();
        $offer = offers_tb::find($id);

        // LOAD LOCATION
        // first get the vendors id 
        // to search for location under the vendor
        $vendor_id = offers_tb::select('vendor_id')->where('id', $id)->get();
        $vendors_id = $vendor_id[0]['vendor_id'];

        $locations = BusLocation::WHERE('vendor_id', $vendors_id)->get();
        return view('vendor.offers.edit_offer')->with(['offer'=> $offer,'vendors' =>  $vendors,'categories' => $categories,'locations' =>  $locations]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allOffers()
    {
         // ALL OFFERS FOR THE USER
         $offers = offers_tb::WHERE('vendor_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
         return view('vendor.offers.all_offers')->with('offers', $offers);

    }


    

         // SLUG CHECKER

         function slug($slug){

            $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
            $spacesDuplicateHypens = '/[\-\s]+/';
            $slug = preg_replace($lettersNumbersSpacesHypens,'',mb_strtolower($slug,'UTF-8'));
            $slug = preg_replace($spacesDuplicateHypens, '-', $slug);
            $slug = trim($slug, '-');
            return $slug;
            
        }
    
    
        public function checker_slug($name, $old_slug = null){
            // To check whether  
            $results = offers_tb::WHERE('title', $name)->get();
            $q_count = count($results);
    
            // $msql = "SELECT title FROM product_tb WHERE title = '$name'";
            // $q = $this->db->query($msql);
            // $results = $q->fetchAll();
            // $q_count = $q->rowCount();
    
            $key=1;
            if($q_count > 0){
            foreach ($results as $result) {
              $slug_name = $result['title']."-".$key++;
              // convert to slug
              $new_slug = $this->slug($slug_name);
              if($new_slug == $old_slug){
                 break;
              }
              }
           return $new_slug;
          }else{
           $new_slug =  $this->slug($name);
           return $new_slug;
          }
    
        }
   




}
