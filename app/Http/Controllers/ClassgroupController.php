<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClassgroupController extends Controller
{
    public function createClassgroups(){

    	return view('classgroups.create');


    }
       public function storeClassgroups(Request $request){

      /* 	if($request->isMethod('post')){
       		 $data=$request->all();
       		 "<pre>"; print_r($data);"</pre>"; die;

       	}*/
       	$data=array();
       	$data['name']=$request->name;
       	DB::table('classgroups')->insert($data);
  
    	return view('classgroups.create');


    }

   
}
