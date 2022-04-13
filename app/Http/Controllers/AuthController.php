<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    public function index(){
        return view('auth.login');
    }
    public function customLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min: 5|max: 12'
        ]);
        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential)){
            return redirect()->intended('dashboard')->withSuccess('Đăng Nhập Thành Công');
        }
        return redirect("login")->withSuccess("Tài khoản hoặc mật khẩu không đúng");
    }
    

    public function registration(){
        return view('auth.registration');
    }
    public function customRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess("Đăng Ký Thành Công");
    }

    public function create(array $data){
        return User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> Hash::make($data['password'])
        ]);
    }

    public function dashboard(){
        if(Auth::check()){
            return view('auth.dashboard');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function logOut(){
        Session::flush();
        Auth::logout();
        return redirect("");
    }
    public function about(){
        return view("auth.about");
    }
}