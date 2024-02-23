<?php

namespace App\Http\Controllers;

use App\Models\personne;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
class RegisterController extends Controller
{
   public function index(){
    return view('roles.accueil');
   }



    public function show()
    {
        return view('roles.createP');
    }

    public function register(LoginRequest $request)
    {
        $forms = $request->validated();    
        $forms["password"] = Hash::make($request->password);
            if ($request->hasFile('image')) {
            $forms['image'] = $request->file('image')->store('personne', 'public');
        }
    
        Personne::create($forms);
        return redirect()->route('personne.show')->with("success", "Vous êtes bien connecté " );

    }

    
}
