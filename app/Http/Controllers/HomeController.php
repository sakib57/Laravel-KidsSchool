<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')->except('create_cartoon_view_limited')->except('create_video_page');
        $this->middleware('auth',['except'=>['create_cartoon_view_limited','create_video_page','create_edu_view_limited']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user/user_home');
    }

    public function create_cartoon_view(){
        $data=DB::table('videos')->where('category','c_video')->get();
        return view('user.view_cartoon')->with('videos',$data);
    }


    public function create_cartoon_view_limited(){
        $data=DB::table('videos')->where('category','c_video')->limit("2")->get();
        return view('user.view_cartoon_limited')->with('videos',$data);
    }
    public function create_video_page(){
        return view('user/video_page');
    }
    
    public function create_edu_view_limited(){
        $data=DB::table('videos')->where('category','e_video')->limit("2")->get();
        return view('user.view_education_limited')->with('videos',$data);
    }
    
    public function create_education_view(){
        $data=DB::table('videos')->where('category','e_video')->get();
        return view('user.view_education')->with('videos',$data);
    }

    public function exam_class(Request $request){
        $class=$request->class;
        $data=DB::table('question')->where('class',$class)->get();
        return view('user.class_exam')->with('question',$data);
    }

    public function exam_start($id){
        $data=DB::table('question')
                        ->where('id',$id)->get();
        
        return view('user.exam_start')->with('q',$data);
    }


    public function exam_result(Request $request){

            $data=array();

            $id=$request->id;

            $op[1]=$request->op_1;
            $op[2]=$request->op_2;
            $op[3]=$request->op_3;
            $op[4]=$request->op_4;
            $op[5]=$request->op_5;
            $op[6]=$request->op_6;
            $op[7]=$request->op_7;
            $op[8]=$request->op_8;
            $op[9]=$request->op_9;
            $op[10]=$request->op_10;
           
            $data=DB::table('question')
                            ->where('id',$id)
                            ->first();

            $res=array();
            $count=0;
            
            if ($data->ans_1 == $op[1]) {
                $res[0]= "Correct";
                $count+=1;
            }else{
                $res[0]= "Incorrect";
            }

            if ($data->ans_2 == $op[2]) {
                $res[1]= "Correct";
                $count+=1;
            }else{
                $res[1]= "Incorrect";
            }

            if ($data->ans_3 == $op[3]) {
                $res[2]= "Correct";
                $count+=1;
            }else{
                $res[2]= "Incorrect";
            }

            if ($data->ans_4 == $op[4]) {
                $res[3]= "Correct";
                $count+=1;
            }else{
                $res[3]= "Incorrect";
            }

            if ($data->ans_5 == $op[5]) {
                $res[4]= "Correct";
                $count+=1;
            }else{
                $res[4]= "Incorrect";
            }

            if ($data->ans_6 == $op[6]) {
                $res[5]= "Correct";
                $count+=1;
            }else{
                $res[5]= "Incorrect";
            }

            if ($data->ans_7 == $op[7]) {
                $res[6]= "Correct";
                $count+=1;
            }else{
                $res[6]= "Incorrect";
            }

            if ($data->ans_8 == $op[8]) {
                $res[7]= "Correct";
                $count+=1;
            }else{
                $res[7]= "Incorrect";
            }

            if ($data->ans_9 == $op[9]) {
                $res[8]= "Correct";
                $count+=1;
            }else{
                $res[8]= "Incorrect";
            }

            if ($data->ans_10 == $op[10]) {
                $res[9]= "Correct";
                $count+=1;
            }else{
                $res[9]= "Incorrect";
            }

            $data=DB::table('question')
                        ->where('id',$id)->get();
        return view("user.result")->with('q',$data)
                                  ->with('res',$res)
                                  ->with('count',$count)
                                  ->with('op',$op);
    }


}
