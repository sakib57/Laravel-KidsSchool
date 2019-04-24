<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use DB;

class ExamsController extends Controller
{
     public function add_exam()
    {
        return view('admin/examsAdd');
    }

    public function create_exam()
    {
        $data=DB::table('exams')->get();
        
        return view('admin/examsManage')->with('all_exam',$data);   
    }
    
    public function create_question()
    {

        
        return view('admin/questionCreate');
    }




     public function store(Request $request)
    {
        /*$data=array();
        $data['book_name']=$request->book_name;
        $data['author_name']=$request->author_name;
        $data['category']=$request->category;
        $data['book_class']=$request->class;
        $data['description']=$request->description;*/

        $exan = new Exam;
        $exam->category=$request->input('category');
        $exam->exam_class=$request->input('class');
       


        $uploadedFile = $request->file('file');
       

        if ($uploadedFile) {
            //request()->validate(['file' => 'required|pdf',]);
            $exam_name = time().'.'.request()->file->getClientOriginalExtension();
            $success=request()->file->move(public_path('question_file/'), $book_name);
            $book->file=$book_name;
        }

        $book->save();
        return redirect()->route('admin.exams.manage');
    }



    public function show_question(){
        //$data=DB::table('books')
                        //->select('file')
                        //->where('id',$id)
                        //->first();
        $pathToFile=public_path('question_file/');
        return response()->file($pathToFile);
        //return view('admin/bookView')->with('book',$data);

         
        // $file = Book::findOrFail($id);
        // if (File::isFile(public_path('pdf_file/'))) { 
        //     $file = File::get($file); 
        //     $response = Response::make($file, 200); 
        //     $response->header('Content-Type', 'application/pdf'); 
        //     return $response; 
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function question_store(Request $request){
    $data=array();
        $data['q_1']=$request->q_1;
        $data['q_2']=$request->q_2;
        $data['q_3']=$request->q_3;
        $data['q_4']=$request->q_4;
        $data['q_5']=$request->q_5;
        $data['q_6']=$request->q_6;
        $data['q_7']=$request->q_7;
        $data['q_8']=$request->q_8;
        $data['q_9']=$request->q_9;
        $data['q_10']=$request->q_10;
        $data['op_1_1']=$request->op_1_1;
        $data['op_1_2']=$request->op_1_2;
        $data['op_1_3']=$request->op_1_3;
        $data['op_1_4']=$request->op_1_4;
        $data['op_2_1']=$request->op_2_1;
        $data['op_2_2']=$request->op_2_2;
        $data['op_2_3']=$request->op_2_3;
        $data['op_2_4']=$request->op_2_4;
        $data['op_3_1']=$request->op_3_1;
        $data['op_3_2']=$request->op_3_2;
        $data['op_3_3']=$request->op_3_3;
        $data['op_3_4']=$request->op_3_4;
        $data['op_4_1']=$request->op_4_1;
        $data['op_4_2']=$request->op_4_2;
        $data['op_4_3']=$request->op_4_3;
        $data['op_4_4']=$request->op_4_4;
        $data['op_5_1']=$request->op_5_1;
        $data['op_5_2']=$request->op_5_2;
        $data['op_5_3']=$request->op_5_3;
        $data['op_5_4']=$request->op_5_4;
        $data['op_6_1']=$request->op_6_1;
        $data['op_6_2']=$request->op_6_2;
        $data['op_6_3']=$request->op_6_3;
        $data['op_6_4']=$request->op_6_4;
        $data['op_7_1']=$request->op_7_1;
        $data['op_7_2']=$request->op_7_2;
        $data['op_7_3']=$request->op_7_3;
        $data['op_7_4']=$request->op_7_4;
        $data['op_8_1']=$request->op_8_1;
        $data['op_8_2']=$request->op_8_2;
        $data['op_8_3']=$request->op_8_3;
        $data['op_8_4']=$request->op_8_4;
        $data['op_9_1']=$request->op_9_1;
        $data['op_9_2']=$request->op_9_2;
        $data['op_9_3']=$request->op_9_3;
        $data['op_9_4']=$request->op_9_4;
        $data['op_10_1']=$request->op_10_1;
        $data['op_10_2']=$request->op_10_2;
        $data['op_10_3']=$request->op_10_3;
        $data['op_10_4']=$request->op_10_4;

        $data['ans_1']=$request->ans_1;
        $data['ans_2']=$request->ans_2;
        $data['ans_3']=$request->ans_3;
        $data['ans_4']=$request->ans_4;
        $data['ans_5']=$request->ans_5;
        $data['ans_6']=$request->ans_6;
        $data['ans_7']=$request->ans_7;
        $data['ans_8']=$request->ans_8;
        $data['ans_9']=$request->ans_9;
        $data['ans_10']=$request->ans_10;

        $data['class']=$request->class;
        $data['title']=$request->title;
        
        DB::table('question')->insert($data);
        return redirect()->route('admin.question.add');

}
 public function manage_question()
    {
        $data=DB::table('question')->get();
        
        return view('admin/questionManage')->with('all_question',$data);


        
    }
    public function delete_question($id){
        DB::table('question')->where('id', '=',$id)->delete();
        return redirect()->route('admin.question.manage');
    }

    public function exam(){
        return view('user.exam');
    }

    
}


