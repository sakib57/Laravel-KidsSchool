<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
       return view('admin/adminHome');
    }

    
    public function create()
    {
        //$all_admin = Admin::get();
        $all_admin =DB::table('admins')
                        ->join('roles','roles.id','=','admins.role_id')
                        ->select('admins.*','roles.role_name')
                        ->get();

        $allRole=DB::table('roles')->get();
        
        return view('admin/adminAdmins')->with('all_admin',$all_admin)
                                        ->with('all_role',$allRole);
    }

    
    public function store(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['role_id']=$request->role_id;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $data['phone']=$request->phone;
        DB::table('admins')->insert($data);
        Session::put('msg','Added successfully !!');
        return redirect()->route('admin.admins');
    }

    
    public function show(Admin $admin)
    {
        //
    }

    
    public function edit(Admin $admin)
    {
        //
    }

    
    public function update(Request $request, Admin $admin)
    {
        //
    }

    
    public function destroy(Admin $admin)
    {
        //
    }



    public function show_user()
    {

        $all_user=DB::table('users')->get();
        return view('admin/users')->with('all_user',$all_user);
    }

    public function delete_user($id){
        DB::table('users')->where('id', '=',$id)->delete();
        return redirect()->route('admin.user');
    }

    public function delete_video($id){
        DB::table('videos')->where('id', '=',$id)->delete();
        return redirect()->route('admin.videos.manage');
    }

    public function delete_question($id){
        DB::table('question')->where('id', '=',$id)->delete();
        return redirect()->route('admin.question.manage');
    }

    public function edit_user($id){
        $data=DB::table('users')
                        ->select('*')
                        ->where('id',$id)
                        ->first();

        return view('admin/users')->with('data',$data);
    }
}
