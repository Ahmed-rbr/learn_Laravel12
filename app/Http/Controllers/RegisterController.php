<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function create(){

        return view('auth.register');
    }

     public function store(){
request()->validate([
    'first_name'=>['required','min:5', 'max:30'],
    'last_name'=>['required','min:5', 'max:30'],
    'email'=>['required','email'],
    'password'=>['required', 'min:8'],
    'password_confirmation'=>['required']
    
]);
User::create([
       'first_name'=>request('first_name'),
    'last_name'=>request('last_name'),
    'email'=>request('email'),
    'password'=>request('password'),
    

]);

return redirect('/');

    }
}
