<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    //

    public function listing(){


    	$getallblog = \App\Models\Blog::simplepaginate(6);

    	return view('blog.blog.listing',compact('getallblog'));
    }

    public function create(){

    	$getallcategories = \App\Models\Categories::get();
    	$getalltags = \App\Models\Tags::get();

    	return view('blog.blog.add',compact('getallcategories','getalltags'));
    }

    public function savecreate(Request $request){

        $obj = new \App\Models\Blog;
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->popular_post = $request->p_post;
        $obj->categories = $request->categories ;
        $obj->tags = $request->tags ;
        $obj->status = $request->status;

        $img = $request->file('image');

        if ($request->hasFile('image')) {
           
            // @unlink('uploads/blog/' . $be->intro_bg2);
            $filename = rand() .'.'. $img->getClientOriginalExtension();
            $img->move('uploads/blog/', $filename);

            $obj->image = $filename;
            

        }
       
        $obj->save();

    	return redirect()->route('blog.listing');
    }

     public function edit($parameter){

        $getallcategories = \App\Models\Categories::get();
    	$getalltags = \App\Models\Tags::get();
        $editdata = \App\Models\Blog::where('id',$parameter)->first();

     return view('blog.blog.edit',compact('editdata','getallcategories','getalltags'));
    }

     public function update(Request $request){
        
        $obj =  \App\Models\Blog::where('id',$request->blog)->first();
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->popular_post = $request->p_post;
        $obj->categories = $request->categories ;
        $obj->tags = $request->tags ;
        $obj->status = $request->status;

        $img = $request->file('image');

        if ($request->hasFile('image')) {
           
            @unlink('uploads/blog/' . $obj->image);
            $filename = rand() .'.'. $img->getClientOriginalExtension();
            $img->move('uploads/blog/', $filename);

            $obj->image = $filename;
            

        }
       
        $obj->save();


    	return redirect()->route('blog.listing');
    }

    public function delete($parameterid){
       
       $geteditdata = \App\Models\Blog::where('id',$parameterid)->first();
       $geteditdata->delete();
    	return redirect()->route('blog.listing');
    }
}
