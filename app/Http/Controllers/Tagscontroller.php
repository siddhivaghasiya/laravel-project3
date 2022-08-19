<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tagscontroller extends Controller
{
    //

     public function listing(){

     	$getalltags = \App\Models\Tags::simplepaginate(5);

    	return view('blog.tages.listing',compact('getalltags'));
    }

     public function create(){

    	return view('blog.tages.add');
    }


    public function savecreate(Request $request){

    	$obj = new \App\Models\Tags;
        $obj->tags = $request->tags;
        $obj->status = $request->status;
          /**database field name/form name**/  
        $obj->save();

    	return redirect()->route('tag.listing');
    }

    public function edit($parameter){
       
       $geteditdata = \App\Models\Tags::where('id',$parameter)->firstOrfail();

        return view('blog.tages.edit',compact('geteditdata'));
    }

      public function update(Request $request){

    	$obj =  \App\Models\Tags::where('id',$request->tages)->first();
        $obj->tags = $request->tags;
        $obj->status = $request->status;
          /**database field name/form name**/  
        $obj->save();

    	return redirect()->route('tag.listing');
    }

     public function delete($parameterid){
       
       $geteditdata = \App\Models\Tags::where('id',$parameterid)->first();
       $geteditdata->delete();

    	return redirect()->route('tag.listing');
    }

}
