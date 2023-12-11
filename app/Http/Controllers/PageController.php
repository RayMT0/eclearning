<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Account;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function homePage() {
        $path = Route::currentRouteName();
        return view('home', ["path" => $path]);
    }

    public function coursePage($course='', $mat='') {
        $path = Route::currentRouteName();
        return view('course', ["path" => $path, "course" => $course, "mat" => $mat]);
    }

    public function signUp() {
        $path = Route::currentRouteName();
        return view('signup', ["path" => $path]);
    }

    public function login() {
        $path = Route::currentRouteName();
        return view('login', ["path" => $path]);
    }

    public function createAccount(Request $request){
        $request->validate([
            'name' => 'required|min:1|max:100',
            'email' => 'required|email|unique:accounts,email,except,id',
            'password'=> 'required|alpha_num|min:8',
            'terms' => 'accepted',
        ]);



        Account::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/');
    }

    public function loginAccount(Request $request){
        $request->validate([
            'email' => 'required|email|exists:accounts,email',
            'password' => 'required',
        ]);

        
        $email = $request->email;
        $acc = DB::table('accounts')
        ->where('email', '=', $email)
        ->get();

        if($acc[0]->password === $request->password){
            return redirect('/');
        }
        else{
            $request->validate([
                'password'=>'accepted',
            ],
            [
                'password.accepted' => 'Wrong password',
            ]);
        }
    }

}
