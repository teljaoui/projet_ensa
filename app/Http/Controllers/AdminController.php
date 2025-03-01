<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Salle;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login_admin()
    {
        return view("admin.login");
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
        return view('admin.salle.home' , compact('salles'));
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
        return view("admin.horaires.home");
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
