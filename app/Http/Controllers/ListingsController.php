<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Listing;
use DB;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lists = listing::all();
        return view('admin.listings.all_product')->with('lists', $lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.listings.add_listing');
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

            $list = new Listing;
            $vendor_id = 1;
            // $this->validate($request, [
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
        
            if ($request->hasFile('image')) {
                
                $image = $request->file('image');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $image_name);
    
            }else{
               $image_name = "";
            }
    
            $list->name = $request->input('name');
            $list->slug = $request->input('slug');
            $list->location = $request->input('location');
            $list->type = $request->input('type'); 
            $list->pricing = $request->input('price');
            $list->start_time = $request->input('start_time');
            $list->end_time = $request->input('end_time');
            $list->start_date = $request->input('start_date');
            $list->end_date = $request->input('end_date');
            $list->details = $request->input('details');
            $list->status= $request->input('status');
            $list->vendor_id= $vendor_id;
            $list->image = $image_name;
            
            // SAVE
            $list->save();

            return view('admin.listings.add_listing')->with(['success' => 'You Have Succefully Added A Member.']);
           } catch (\Exception $e) {
            return view('admin.listings.add_listing')->with(['error' => 'Member Already Exists']);
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
        //
        $list = listing::find($id);
        return view('admin.listings.edit_product')->with('list', $list);
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
        $list = listing::find($id);
        return view('admin.listings.edit_product')->with('list', $list);
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
        //
        try{

            $list = listing::find($id);
           // $vendor_id = 1;
            // $this->validate($request, [
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
        
            if ($request->hasFile('image')) {
                
                $image = $request->file('image');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $image_name);
    
            }else{
               $image_name = "";
            }
    
            $list->name = $request->input('name');
            $list->slug = $request->input('slug');
            $list->location = $request->input('location');
            $list->type = $request->input('type'); 
            $list->pricing = $request->input('price');
            $list->start_time = $request->input('start_time');
            $list->end_time = $request->input('end_time');
            $list->start_date = $request->input('start_date');
            $list->end_date = $request->input('end_date');
            $list->details = $request->input('details');
            $list->status= $request->input('status');
            // $list->vendor_id= $vendor_id;
            $list->image = $image_name;
            
            // SAVE
            $list->save();
            $list = listing::find($id);
            return view('admin.listings.add_listing')->with(['list'=> $list,'success' => 'Record Updated Succefully.']);
           } catch (\Exception $e) {
            return view('admin.listings.add_listing')->with(['list'=> $list,'error' => 'Member Already Exists']);
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
}
