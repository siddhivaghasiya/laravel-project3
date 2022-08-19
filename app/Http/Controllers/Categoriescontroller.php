<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categoriescontroller extends Controller
{
    //
     public function listing(){

     	$getallcategories = \App\Models\Categories::simplepaginate(5);

    	return view('blog.Categories.listing',compact('getallcategories'));
    }

     public function create(){

    	return view('blog.Categories.add');
    }

    public function savecreate(Request $request){

    	$obj = new \App\Models\Categories;
        $obj->categories = $request->categories;
        $obj->status = $request->status;
          /**database field name/form name**/  
        $obj->save();

    	return redirect()->route('categories.listing');
    }

    public function edit($parameter){
       
       $geteditdata = \App\Models\Categories::where('id',$parameter)->firstOrfail();

        return view('blog.categories.edit',compact('geteditdata'));
    }

     public function update(Request $request){

    	$obj =  \App\Models\Categories::where('id',$request->categorie)->first();
        $obj->categories = $request->categories;
        $obj->status = $request->status;
          /**database field name/form name**/  
        $obj->save();

    	return redirect()->route('categories.listing');
    }

     public function delete($parameterid){
       
       $geteditdata = \App\Models\Categories::where('id',$parameterid)->first();
       $geteditdata->delete();
    	return redirect()->route('categories.listing');
    }

}
