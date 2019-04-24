<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category_tb;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = category_tb::all();
        return view('admin.category.categories')->with('categories', $categories);
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
         $category = new category_tb;
    
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
 
         $category->name = $request->input('name');
         $category->slug = $request->input('slug');
         $category->description = $request->input('description');
         $category->publish = $request->input('publish');
         $category->image = $image_name;
        
         // SAVE
         $category->save();
          
         // LOAD 
         $categories = category_tb::all();
         return view('admin.category.categories')->with('categories', $categories);
 
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
        //
        $category = category_tb::find($id);
        $categories = category_tb::all();
        return view('admin.category.edit_category')->with(['category' => $category,'categories' => $categories ]);
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
        $category = category_tb::find($id);
        $categories = category_tb::all();
        return view('admin.category.edit_category')->with(['category' => $category,'categories' => $categories ]);
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
        $category = category_tb::find($id);
        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
        if ($request->hasFile('image')) {
            
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $image_name);
            $category->image = $image_name;
            // $this->save();
            // return back()->with('success','Image Upload successfully');

        }else{
           $image_name = "";
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->publish = $request->input('publish');
    
        // SAVE
        $category->save();
         
        // LOAD 
        $category = category_tb::find($id);
        $categories = category_tb::all();
        return view('admin.category.edit_category')->with(['category' => $category,'categories' => $categories ]);
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
