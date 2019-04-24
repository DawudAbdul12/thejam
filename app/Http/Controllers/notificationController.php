<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notitification;

class notificationController extends Controller
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
        try{
            //
            $notification  = new Notitification;
           // Bind param
            $notification->sender_id = $request->input('sender_id');
            $notification->type = $request->input('type');
            $notification->title = $request->input('title'); 
            $notification->body = $request->input('body');
            $notification->href = $request->input('href');
            $notification->recipient_id = $request->input('recipient_id');
            $notification->is_unread = $request->input('is_unread');
            $notification->is_hidden = $request->input('is_hidden');
            $notification->created_time = $request->input('created_time');
            
            // SAVE
            $notification->save();

            // SUCCESS
            
            
    
         //return view('admin.offers.add_offer')->with(['success' => 'You Have Added Offer Succefully .','vendors' =>  $vendors,'categories' => $categories]);
        } catch (\Exception $e) {
         //return $e->getMessage();
        //return view('admin.offers.add_offer')->with(['error' => 'Offer Already Exist','vendors' =>  $vendors,'categories' => $categories]);
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
    public function update(Request $request, $id)
    {
        //
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
