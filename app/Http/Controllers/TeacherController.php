<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TeacherController extends Controller
{
    public function createTeacher(){

    	return view('teachers.create');
    }
     public function storeTeacher(Request $request){

       /* if($request->isMethod('post')){
            $data=$request->all();
            echo "<pre>"; print_r($data); echo "</pre>"; die;
        }*/


     	$data=array();
     	$data['name']=$request->name;
     	$data['email']=$request->email;
        $data['password']=md5($request->password);
     	$data['gender']=$request->gender;
     	$data['experience']=$request->experience;
     	$data['phone']=$request->phone;
        $success=DB::table('teachers')->insert($data);


    	return view('teachers.create');
    }

    public function showTeacher(){

        $all_teachers=DB::table('teachers')->get();
        return view('teachers.all_teachers')->with('all_teachers',$all_teachers);


    }

    public function editTeacher($id){

        $single_teacher=DB::table('teachers')->where('id',$id)->first();
        return view('teachers.edit_teacher')->with('single_teacher',$single_teacher);


    }
     public function updateTeacher($id,Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['experience']=$request->experience;
        $data['phone']=$request->phone;
        $success=DB::table('teachers')->where('id',$id)->update(['name'=>$data['name'],'email'=>$data['email'],'experience'=>$data['experience'],'phone'=>$data['phone']]);

      
        return redirect('/show-teachers');


    }

    public function destroyTeacher($id){
        DB::table('teachers')->where('id',$id)->delete();
        return redirect('/show-teachers');
    }
}
