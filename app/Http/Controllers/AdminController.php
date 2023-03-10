<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Admin;

class AdminController extends Controller
{

    public function login()
    {
        return view("auth.login");
    }
    public function register()
    {
        return view("auth.register");
    }
    public function saveadmin(Request $request)
    {
        $request->validate([
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required|email|unique:admins',
            'phone'=>'required|min:10|max:12',
            'password'=>'required|min:6|max:13'
        ]);

        $admin = new Admin();
        $admin->f_name = $request->f_name;
        $admin->l_name = $request->l_name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','Admin Member Registered Successfuly!.');
        }else{
            return back()->with('fail','Something went wrong, try again later.');
        }

    }
    public function checkadmin(Request $request)
    {

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:13'
        ]);

        $userinfo = Admin::where('email','=',$request->email)->first();

        if(!$userinfo){
            return back()->with('fail','We do not recognize your email.');
        }else{
            if(Hash::check($request->password, $userinfo->password)){
                $request->session()->put('loggeduser',$userinfo->admin_id);
                return redirect('/admin/dashboard');
            }else{
                return back()->with('fail','Incorrect Password. Please Try Again.');
            }
        }

    }
    public function logoutadmin(){
        if(session('loggeduser')){
            session()->pull('loggeduser');
            return redirect('/auth/login');
        }
    }
    public function dashboard(){
        $userdata = ['loggeduserinfo'=>Admin::where('admin_id','=', session('loggeduser'))->first()];
        return view('admin.dashboard',$userdata);
    }







    public function fakeUser(Request $request)
    {
        $admin = new Admin;

        $admin->f_name = 'Tony';
        $admin->l_name = 'Ngash';
        $admin->email = 'tonyngash89@gmail.com';
        $admin->phone = '0790818789';
        $admin->password = bcrypt('123456789');

        $admin->save();

        // return redirect('/admin')->with('success', 'Admin added successfully.');
        return "Admin added successfully.";
    }

}
