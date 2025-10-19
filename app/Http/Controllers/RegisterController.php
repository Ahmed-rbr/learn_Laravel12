<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    
    public function create(){

        return view('auth.register');
    }

     public function store(){
$attributes=request()->validate([
    'first_name'=>['required','min:5', 'max:30'],
    'last_name'=>['required','min:5', 'max:30'],
    'email'=>['required','email','max:254'],
    'password'=>['required',Password::min(6),'confirmed'],
    //laravel will look for field with name password_confirmation
 //if this done it will return an $validationAttributes  
]);
$user=User::create($attributes);

Auth::login($user);
return redirect('/jobs');

    }
}
