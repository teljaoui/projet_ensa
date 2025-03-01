<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Salle;
use App\Models\Tim;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{

    public function login_admin()
    {
        return view("admin.login");
    }
    public function loginpost(Request $request)
    {
        $user = User::where('email', '=', 'admin')->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect(route("admin"))->with("success", "Bienvenue de retour Admin, la connexion a réussi.");
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
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::forget('loginId');
            Session::flush();
        }

        return redirect(route('login_admin'))->with('success', 'Vous avez été déconnecté avec succès.');
    }
    public function homeadmin()
    {
        return view("admin.home");
    }

    public function profview()
    {
        $profs = Prof::paginate(9);
        return view("admin.prof.home", compact('profs'));
    }
    public function profadd()
    {
        return view('admin.prof.add');
    }
    public function profup($id)
    {
        $prof = Prof::find($id);
        return view("admin.prof.update", compact("prof"));
    }

    public function salles()
    {
        $salles = Salle::orderBy("name")->paginate(10);
        return view('admin.salle.home', compact('salles'));
    }

    public function salleadd()
    {
        return view('admin.salle.add');
    }

    public function salleup($id)
    {
        $salle = Salle::find($id);
        return view('admin.salle.update', compact('salle'));
    }

    public function horaires()
    {
        $tims = Tim::orderBy('time')->paginate(10);
        return view("admin.horaires.home", compact('tims'));
    }
    public function horaireadd()
    {
        return view("admin.horaires.add");
    }
    public function horaireup()
    {
        return view("admin.horaires.update");
    }
}
