<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClassroomsController extends Controller
{
     public function createClassrooms(){

     	$classGroups=DB::table('classgroups')->get();

    	return view('classrooms.create')->with(compact('classGroups'));
    }

    public function storeClassrooms(Request $request){

       /* if($request->isMethod('post')){
            $data=$request->all();
            echo "<pre>"; print_r($data); echo "</pre>"; die;
        }*/


     	$data=array();
     	$data['name']=$request->name;
     	$data['classgroup_id']=$request->classgroup_id;
        
        $success=DB::table('classrooms')->insert($data);


    	return redirect()->back();
    }

     /* public function showClassrooms($id){

        $all_Clasrooms=DB::table('classrooms')->get();
        $classGroups=DB::table('classgroups')->get();
        return view('classrooms.all_clasrooms')->with(compact('all_Clasrooms','classgroups'));


    }*/
}
