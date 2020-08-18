<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories=Subcategory::all();
        //dd($items);

        return view('backend.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories=Category::all();
        return view('backend.subcategoires.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subcategory_name'=>'required',
            'category_id'=>'required',
        ]);
        //If include file, upload 
        //File upload
        
        //Data insert 
        $subcategory = new Subcategory;
        
        $subcategory->name =$request->name;
        $subcategory->category_id =$request->category_id;
        $subcategory->save();


        //Redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.subcategories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $subcategory=Subcategory::find($id);
        return view('backend.subcategories.edit',compact('categories','subcategory'));
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
        $request->validate([
            'subcategory_name'=>'required',
            'category_id'=>'required',
        ]);
       
       
        //data update
        $subcategory = Subcategory::find($id);
        $subcategory->name =$request->subcategory_name;
        $subcategory->category_id =$request->category_id;
        $subcategory->save();
        
        //redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory=Subcategory::find($id);
        $subcategory->delete();
        //redirect
        return redirect()->route('subcategories.index');
    }
}
