<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    
    use AuthenticatesUsers;

    
    protected $redirectTo = '/home';

    /*Constructor*/
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        $this->middleware('guest:admin',['except'=>['logout']]);
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        //validate form data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //get data 
        $credentials = $request->only('email', 'password');
        
        //attempt to login
        if(Auth::guard('admin')->attempt($credentials,$request->remember)){
            $admin_info=Admin::where('email',$credentials['email'])->get();
            $adminRole=$admin_info[0]->role_id;
            $adminName=$admin_info[0]->name;
            Session::put('adminRole', $adminRole);
            Session::put('adminName',$adminName);
            //dd($value);
            return redirect()->intended(route('admin.dashboard'));
        }

        //if unsuccess , return
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->forget('adminRole');
        session()->forget('adminName');
        return redirect()->route('admin.login');
    }
}
