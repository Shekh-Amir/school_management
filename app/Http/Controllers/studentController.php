<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class studentController extends Controller
{
	public function createStudent(){

		return view('students.create');

	}

	public function storeStudent(Request $request){

		/*if($request->isMethod('post')){

			$data=$request->all();
		echo "<pre>"; print_r($data); echo "</pre>"; die;


		}*/

   $data=array();
   $data['name']=$request->name;
   $data['username']=$request->username;
   $data['email']=$request->email;
   $data['gender']=$request->gender;
   $data['age']=$request->age;
   $data['address']=$request->address;
   $data['classroom_id']=$request->classroom_id;
   $data['level_id']=$request->level_id;
   $data['password']=md5($request->password);
   $data['password_confirmation']=md5($request->password);
    $insertStudent=DB::table('students')->insert($data);
    return view('students.create');
	}

	public function showStudents(){
		$allStudents=DB::table('students')->get();
		return view('students.all_students')->with('allStudents',$allStudents);
	}

}
