<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BusLocation;
USE DB;

class BusLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {   
        
        $id = $request->input('vendor_id');
        $location = BusLocation::WHERE('vendor_id', $id)->get();
        return $location;
        
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        try{
        $id = $request->input('id');
        $location = BusLocation::find($id);
        $location->bus_location = $request->input('location');
        $location->long = $request->input('longitude');
        $location->latitude = $request->input('latitude');
        $location->save();
        return "saved";
        } catch (\Exception $e) {
        return  $e;
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
        //
        try{
        $id = $request->input('id');
        $location = BusLocation::find($id);
        $location->delete();
        return "deleted";
        }catch(\Exception $e){
         return $e;
        } 
      
    }
}
