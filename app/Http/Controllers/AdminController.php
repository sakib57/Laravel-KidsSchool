<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $data['password']=$request->password;
        $data['phone']=$request->phone;
        DB::table('admins')->insert($data);
        Session::put('msg','Brand added successfully !!');
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
}
