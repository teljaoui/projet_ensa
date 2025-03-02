<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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

    public function passwordpost(Request $request)
    {
        try {
            $validatedata = $request->validate([
                'password' => 'required|string|confirmed'
            ]);

            $admin = User::where('email', '=', 'admin')->first();

            if ($admin) {
                $admin->update([
                    'password' => bcrypt($validatedata['password'])
                ]);

                return redirect(route('admin_password'))->with('success', 'Le mot de passe a été mis à jour avec succès');
            }

            return back()->with("error", "L'utilisateur n'a pas été trouvé");
        } catch (\Exception $e) {

            return back()->with("error", "Une erreur est survenue lors de la modification du mot de passe. Veuillez réessayer.");
        }
    }



    public function homeadmin()
    {
        $today = \Carbon\Carbon::today();
        $bookings = Booking::with(['timeStart', 'timeFin', 'prof', 'salle'])
            ->whereDate('date_booking', '=', $today)
            ->paginate(8);

        return view("admin.home", compact('bookings'));
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
    public function password()
    {
        return view('admin.password');
    }

    public function search_date(Request $request)
    {
        try {
            $date_select = $request->date_select;
            $bookings = Booking::with(['timeStart', 'timeFin', 'prof', 'salle'])
                ->whereDate('date_booking', '=', $date_select)
                ->paginate(8);
            if ($bookings->isEmpty()) {
                return redirect(route('admin'))->with('warning', 'Aucune réservation trouvée à cette date');
            }

            return view("admin.home", compact('bookings'))
                ->with('success', 'Voici les résultats de la recherche pour la date ' . $date_select);
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue : ' . $e->getMessage());
        }
    }


}
