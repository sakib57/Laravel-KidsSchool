<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use DB;

class VideosController extends Controller
{
    //
    public function add_video()
    {
        return view('admin/videosAdd');
    }
    public function create_video()
    {
        $data=DB::table('videos')->get();
        
        return view('admin/videosManage')->with('all_video',$data);


        
    }
    public function store(Request $request)
    {
        /*$data=array();
        $data['book_name']=$request->book_name;
        $data['author_name']=$request->author_name;
        $data['category']=$request->category;
        $data['book_class']=$request->class;
        $data['description']=$request->description;*/

        $video = new Video;
        $video->video_name=$request->input('video_name');
        $video->category=$request->input('category');
        $video->url=$request->input('url');


      
       

       

        $video->save();
        return redirect()->route('admin.videos.manage');
    }
}
