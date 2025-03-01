<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginprofpost(Request $request)
    {
        $user = Prof::where('email', '=', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginIdProf', $user->id);
                return redirect(route("home"))->with("success", "Bienvenue, Professeur ! Votre connexion a été réussie avec succès");
            } else {
                return back()->withErrors(
                    [
                        'email' => "Email ou mot de passe incorrect."
                    ]
                )->onlyInput('email');
            }
        } else {
            return back()->withErrors([
                'email' => "Email introuvable"
            ])->withInput();
        }
    }
}
