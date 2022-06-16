<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class LoginController extends Controller
{

public function index()
{
   return view('auth.login');
}

public function store(Request $request)
{   
   $this->validate($request, [
      'email'=>'required|email',
      'password'=>'required',
   ]);

   if  (!auth()->attempt($request->only('email' ,'password'))) {
      return back()->with('status','Invalid login details');
   }  // als de gegevens niet juist zijn ingevuld word er een error message vertoond 

   return redirect()->route('home');

   } 
}