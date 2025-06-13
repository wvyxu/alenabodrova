<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use App\Models\Stuff;
use App\Models\User;

class UserController extends Controller
{
    public function show_reg() {
        return view('reg');
    }
    public function show_sign_in() {
        return view('sign-in');
    }

    public function profile(){
        // if(Auth::user()->role == '2'){
        //     return redirect('admin');
        // } else 
        return view('profile');
    }
    
    public function register(Request $r){
        $v = $r->validate([
            'name' => "required|string",
            'phone' => 'required|string|unique:users',
            'surname'=>'required|string',
            'patronymic' => 'string|max:40',
            'password' => 'required|string|min:6|confirmed',
            'rules' => 'required|accepted'
        ]);
        $user = new User();
        $user -> name = $r -> name;
        $user -> phone = $r->phone;
        $user -> surname = $r->surname;
        $user -> patronymic = $r->patronymic;
        $user -> password = Hash::make($r-> password);
        
        $user->save();
        Auth::login($user);
        return redirect('/profile');
    }

    public function sign_in(Request $r){
        $v = $r->validate([
            'phone'=>'required',
            'password' => 'required']);
        if(Auth::attempt($v)){
            if(Auth::user()->role=='2'){
                return redirect('/admin');
            }
            return redirect('/profile');
        }
        return redirect()->back()->with(`error`, 'Неправильный логин или пароль');
    }
    public function logout(Request $r){
        Auth::logout();
        return redirect('sign-in');
    }

    public function show_admin(){
        return view('admin.index');
    }

    
}
