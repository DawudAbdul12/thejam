<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vendor_tb;
use DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendors = vendors_tb::all();
        return view('admin.vendor.all_vendors')->with('vendors', $vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return $name = $request->input('fnames');
          try{
         $vendor = new vendors_tb;
         $rememberToken = time().$request->input('email');

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
 
         $vendor->name = $request->input('name');
         $vendor->location = $request->input('location');
         $vendor->phone_number = $request->input('pnumber');
         $vendor->profile_pic = $image_name;
         $vendor->details = $request->input('details');
         $vendor->email = $request->input('email');
         $vendor->password = $request->input('pass');
         $vendor->status = $request->input('status');
         $vendor->remember_token =  $rememberToken;
         // SAVE
         $vendor->save();
         return view('admin.vendor.add_vendor')->with(['success' => 'You Have Succefully Added A Member.']);
        } catch (\Exception $e) {
         return view('admin.vendor.add_vendor')->with(['error' => 'Member Already Exists']);
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
        $vendor = vendors_tb::find($id);
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
        //
        $vendor = vendors_tb::find($id);
        return view('admin.vendor.edit_vendor')->with('vendor', $vendor);
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
        $vendor = vendors_tb::find($id);

        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
        if ($request->hasFile('image')) {
            
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/profile_pic');
            $image->move($destinationPath, $image_name);
            $vendor->profile_pic = $image_name;
            // $this->save();
            // return back()->with('success','Image Upload successfully');

        }else{
           $image_name = "";
        }

        $vendor->name = $request->input('name');
        $vendor->location = $request->input('location');
        $vendor->phone_number = $request->input('pnumber');
        $vendor->details = $request->input('details');
        $vendor->email = $request->input('email');
        $vendor->status = $request->input('status');
        // SAVE
        $vendor->save();

        return view('admin.vendor.edit_vendor')->with(['vendor' => $vendor, 'success' => 'Record  Updated Succefully.']);
        } catch (\Exception $e) {
         return view('admin.vendor.edit_vendor')->with(['vendor' => $vendor, 'error' => 'Error, Please check and try again.']);
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
