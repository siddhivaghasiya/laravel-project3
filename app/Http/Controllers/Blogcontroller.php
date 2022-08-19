<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    //

    public function listing(){

    	return view('blog.blog.listing');
    }

    public function create(){

    	return view('blog.blog.add');
    }

    public function savecreate(Request $request){


    	dd($request->all());
        $obj = new \App\Models\Blog;
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->popular_post = $request->p_post_ ;
        $obj->status = $request->status;
          /**database field name/form name**/  
        $obj->save();

    	return redirect()->route('blog.listing');
    }
}
