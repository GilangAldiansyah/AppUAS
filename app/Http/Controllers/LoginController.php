<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login'
    ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
             'name' => 'required|max:255',
             'email' => 'required|email:dns|unique:users',
             'password' =>'required|min:8|max:255'
         ]);

         $validatedData['password'] = Hash::make($validatedData['password']);

         User::create($validatedData);

         return redirect()->route('surat.index')->with('success', 'Berhasil Login');

     }

     public function authenticate(Request $request){
        $credentials = $request->validate([
          'email' => 'required|email:dns',
          'password' => 'required',
      ]);


     if(Auth::attempt($credentials)) {
         $request->session()->regenerate();
         return redirect()->intended('/surat');
     }

     return back()->withErrors([
         'email' => 'The provided credentials do not match our records.',
     ])->onlyInput('email');
 }
}
