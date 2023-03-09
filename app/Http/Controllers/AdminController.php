<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Admin;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect('admin/dashboard');
            // return view('admin/dashboard');
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function logout()
    {
        Auth::guard('admins')->logout();

        return view('admin/login');
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
