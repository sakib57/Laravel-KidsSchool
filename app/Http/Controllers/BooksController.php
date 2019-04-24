<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use File;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/booksAdd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=DB::table('books')->get();
        
        return view('admin/booksManage')->with('all_book',$data);


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$data=array();
        $data['book_name']=$request->book_name;
        $data['author_name']=$request->author_name;
        $data['category']=$request->category;
        $data['book_class']=$request->class;
        $data['description']=$request->description;*/

        $book = new Book;
        $book->book_name=$request->input('book_name');
        $book->author_name=$request->input('author_name');
        $book->category=$request->input('category');
        $book->book_class=$request->input('class');
        $book->description=$request->input('description');


        $uploadedFile = $request->file('file');
       

        if ($uploadedFile) {
            //request()->validate(['file' => 'required|pdf',]);
            $book_name = time().'.'.request()->file->getClientOriginalExtension();
            $success=request()->file->move(public_path('pdf_file/'), $book_name);
            $book->file=$book_name;
        }

        $book->save();
        return redirect()->route('admin.books.manage');
    }

    public function show_pdf(){
        //$data=DB::table('books')
                        //->select('file')
                        //->where('id',$id)
                        //->first();
        $pathToFile=public_path('pdf_file/');
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
}
