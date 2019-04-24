<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\offers_tb;
use App\vendor_tb;
use App\category_tb;
use App\BusLocation;
use App\Notitification;
use App\member_tb;
use DB;
class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offers = offers_tb::all();
        return view('admin.offers.all_offers')->with('offers', $offers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vendors = vendor_tb::all();
        $categories = category_tb::all();
        return view('admin.offers.add_offer')->with(['vendors' =>  $vendors,'categories' => $categories ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        //
        $offer = new offers_tb;
        $vendors = vendor_tb::all();
        $categories = category_tb::all();
        $rate =0.0;
        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
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
        //$offer->slug = $request->input('slug');
        $offer->vendor_id = $request->input('vendor');
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
            $sender_id = $request->input('vendor');;
            $title = $request->input('name');
            $body = $request->input('details');
            $href =  $href = "/offers/".$slug;

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

            // |
            // |
            // | NOTIFICATION
            // | FOR MEMBERS
            // |



        

     return view('admin.offers.add_offer')->with(['success' => 'You Have Added Offer Succefully .','vendors' =>  $vendors,'categories' => $categories]);
    } catch (\Exception $e) {
     return $e->getMessage();
   // return view('admin.offers.add_offer')->with(['error' => 'Offer Already Exist','vendors' =>  $vendors,'categories' => $categories]);
      // return view('admin.category.categories')->with(['categories' => $categories, 'success' => $e->getMessage()]); ;
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
        $vendors = vendor_tb::all();
        $categories = category_tb::all();
        $offer = offers_tb::find($id);

       // LOAD LOCATION
        // first get the vendors id 
        // to search for location under the vendor
        $vendor_id = offers_tb::select('vendor_id')->where('id', $id)->get();
        $vendors_id = $vendor_id[0]['vendor_id'];
        $locations = BusLocation::WHERE('vendor_id', $vendors_id)->get();

        return view('admin.offers.edit_offer')->with(['offer'=> $offer,'vendors' =>  $vendors,'categories' => $categories,'locations' =>  $locations]);
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

        return view('admin.offers.edit_offer')->with(['offer'=> $offer,'vendors' =>  $vendors,'categories' => $categories,'locations' =>  $locations]);
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
        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
        if ($request->hasFile('image')) {
            
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $image_name);
            $offer->image = $image_name;

            // $this->save();
            // return back()->with('success','Image Upload successfully');

        }else{
           $image_name = "";
        }

        $offer->title = $request->input('name');
        $offer->slug = $this->checker_slug($request->input('name'), $request->input('slug'));
       // $offer->slug = $request->input('slug');
        $offer->vendor_id = $request->input('vendor');
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
        // first get the vendors id 
        // to search for location under the vendor
        $vendor_id = offers_tb::select('vendor_id')->where('id', $id)->get();
        $vendors_id = $vendor_id[0]['vendor_id'];

       $locations = BusLocation::WHERE('vendor_id', $vendors_id)->get();

    return view('admin.offers.edit_offer')->with(['success' => 'Updated Succefully .','offer'=> $offer,'vendors' =>  $vendors,'categories' => $categories,'locations' =>  $locations]);
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
    public function destroy($id)
    {
        //
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
    
    //##############   FRONT END CONTROLLER ###################
    
    public function front_index()
    {
        $end_date = date("Y-m-d");
        //$vendors = vendor_tb::all();
        $approved = offers_tb::WHERE([
            ['status', '=', 'approved'],
            ['end_date', '>=', $end_date],
        ])->get();

        $featured = offers_tb::WHERE([
            ['status', '=', 'approved'],
            ['end_date', '>=', $end_date],
            ['featured', '=', 'Yes'],
        ])->orderBy('start_date', 'ASC')->take(3)->get();

        //$approved = vendor_tb::WHERE('status', 'approved')->get();
        // $pending = vendor_tb::WHERE('status', 'Pending')->get();
        // $blocked = vendor_tb::WHERE('status', 'Blocked')->get();
        return view('index')->with(['approved' => $approved, 'featured' => $featured]);
        
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
        //
        //$offer = offers_tb::find(1);
        $offer = offers_tb::WHERE('slug', $slug)->get();
        //return $offer;
        return view('offer_single')->with(['offer'=> $offer]);
    }

    //############   SINGLE PAGE ##############################//









    //###############   END OF FRONT CONTROLLER ###################
}
