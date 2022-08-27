<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Doctorscontroller extends Controller
{
    //

    public function listing(){

    	$getdoctors = \App\Models\Doctors::get();

    	return view('doctors.listing',compact('getdoctors'));
    }

    public function create(){
    	
    	$getdepartment = \App\Models\Department::get();

    	return view('doctors.add',compact('getdepartment'));
    }


    public function savecreate(Request $request){
    	 

    	$obj = new \App\Models\Doctors;
        $obj->image = $request->image;
        $obj->name = $request->name;
        $obj->position = $request->position;
        $obj->description = $request->description ;
        $obj->department = $request->department ;
        $obj->status = $request->status;

        $img = $request->file('image');

        if ($request->hasFile('image')) {
           
            // @unlink('uploads/doctors/' . $be->intro_bg2);
            $filename = rand() .'.'. $img->getClientOriginalExtension();
            $img->move('uploads/doctors/', $filename);

            $obj->image = $filename;
            
        }
       
        $obj->save();

        return redirect()->route('doctors.listing');
    }

      public function edit($parameter){
    	
    	$getdepartment = \App\Models\Department::get();
    	 $getdoctors = \App\Models\Doctors::where('id',$parameter)->first();

    	return view('doctors.edit',compact('getdoctors','getdepartment'));
    }


    public function update(Request $request,$parameter){
    	 

    	$obj =  \App\Models\Doctors::where('id',$parameter)->first();
        $obj->image = $request->image;
        $obj->name = $request->name;
        $obj->position = $request->position;
        $obj->description = $request->description ;
        $obj->department = $request->department ;
        $obj->status = $request->status;

        $img = $request->file('image');

        if ($request->hasFile('image')) {
           
             @unlink('uploads/doctors/' . $obj->image);
            $filename = rand() .'.'. $img->getClientOriginalExtension();
            $img->move('uploads/doctors/', $filename);

            $obj->image = $filename;
            
        }
       
        $obj->save();

        return redirect()->route('doctors.listing');
    }

    public function delete($parameterid){
         

        $obj = \App\Models\Doctors::where('id',$parameterid)->first();
        $obj->delete();

        return redirect()->route('doctors.listing');
    }
}
