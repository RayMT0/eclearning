<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Account;

class PageController extends Controller
{
    public function homePage() {
        return view('home');
    }

    public function signUp() {
        return view('signup');
    }

    public function login() {
        return view('login');
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
