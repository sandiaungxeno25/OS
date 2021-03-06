<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Subcategory;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	$items=Item::orderBy('id','desc')->take(6)->get();
    	//dd($items);
    	return view('frontend.home',compact('items'));
    }
    public function frontitem($value='')
    {
    	// $items=Item::orderBy('id','desc')->take(3)->get();
        $subcategories=Subcategory::all();
        //dd($subcategories);
        return view('frontend.items',compact('subcategories'));
    }

    public function frontdetail($id)
    {
    	$item = Item::find($id);
        return view('frontend.detail',compact('item'));
    }

    public function frontabout($value='')
    {
    	return view('frontend.about');
    }

    public function frontcontact($value='')
    {
    	return view('frontend.contact');
    }

    public function frontcheckout($value='')
    {
        
    	return view('frontend.checkout');
    }

    public function frontregister($value='')
    {
    	return view('frontend.register');
    }

    // public function frontlogin(Request $request)
    // {
    //     $request = [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ];
    //     $this->validate($request);
    //     return redirect()->route('frontend.login');
    // 	//return view('frontend.login');
    // }

    public function frontlogin($value='')
    {
        return view('frontend.login');
    }



    public function frontprofile($value='')
    {
    	return view('frontend.profile');
    }

    public function getItems(request $request)
    {   

        $sid=$request->sid;
        // dd($sid);
        if($sid==0){
            $items=Item::all();
        }else{
            $items=Subcategory::find($sid)->items;
        }
        
        return $items;
    }

}
