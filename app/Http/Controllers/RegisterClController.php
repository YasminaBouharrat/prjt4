<?php

namespace App\Http\Controllers;


use App\Models\client;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginClRequest;
class RegisterClController extends Controller
{
    public function index(){
        return view('produits');
       }
    
    
        public function show()
        {
            return view('produitCl.createC');
        }
    
        public function register(LoginClRequest $request)
        {
            $forms = $request->validated();
            $forms["password"] = Hash::make($request->password);
                    if ($request->hasFile('image')) {
                $forms['image'] = $request->file('image')->store('client', 'public');
            }
        
            client::create($forms);
            return redirect()->route('client.login')->with("success", "Vous êtes bien connecté " );
    
        }
    
        
}
