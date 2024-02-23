<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginCLController extends Controller
{
    public function show()
    {
        
        return view('produitCl.authC');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $credentials = ["email" => $email, "password" => $password];
        \Log::info('Input Credentials: ', $credentials);
    
        if (Auth::guard('clients')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('produits')->with("success", "Vous êtes bien connecté ");
        } else {
            return back()->withErrors([
                'email' => 'Email ou password incorrect'
            ])->onlyInput('email');
        }
    }
    
    


    public function logout(Request $request)
    {
        $email = $request->email;
        Session::flush();
        Auth::logout();
        return redirect()->route('produits')->with("success", "Vous êtes bien déconnecté " . $email . ".");
    }
}
