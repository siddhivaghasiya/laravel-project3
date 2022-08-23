<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Departmentcontroller extends Controller
{
    //

    public function listing(){

     $getalldepartment = \App\Models\Department::simplepaginate(6);
      
      return view('department.listing',compact('getalldepartment'));
    }

    public function create(){
      
      return view('department.add');
    }

    public function savecreate(Request $request){
      
      $obj = new \App\Models\Department;
      $obj->title = $request->title;
      $obj->description = $request->description;
      $obj->small_description = $request->smalldescription;
      $obj->number = $request->number;
      $obj->status = $request->status;
          /**database field name/form name**/ 

     $img = $request->file('image');

        if ($request->hasFile('image')) {
           
            // @unlink('uploads/department/' . $be->intro_bg2);
            $filename = rand() .'.'. $img->getClientOriginalExtension();
            $img->move('uploads/department/', $filename);

            $obj->image = $filename; 

        }

      $obj->save();

      return redirect()->route('department.listing');
    }

    public function edit($parameter){

    	$geteditdata = \App\Models\Department::where('id',$parameter)->first();
      
      return view('department.edit',compact('geteditdata'));
    }

    public function update(Request $request,$paramter){

      $obj =  \App\Models\Department::where('id',$paramter)->first();
      $obj->title = $request->title;
      $obj->description = $request->description;
      $obj->small_description = $request->smalldescription;
      $obj->number = $request->number;
      $obj->status = $request->status;
          /**database field name/form name**/ 

     $img = $request->file('image');

        if ($request->hasFile('image')) {
           
             @unlink('uploads/department/' . $obj->image);
            $filename = rand() .'.'. $img->getClientOriginalExtension();
            $img->move('uploads/department/', $filename);

            $obj->image = $filename; 

        }

      $obj->save();      
      return redirect()->route('department.listing');
    }

    public function delete($parameterid){
       
       $obj = \App\Models\Department::where('id',$parameterid)->first();
       $obj->delete();
    	return redirect()->route('department.listing');
    }
}
