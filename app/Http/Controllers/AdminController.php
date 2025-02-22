<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login_admin(){
        return view("admin.login");
    }
    public function homeadmin(){
        return view("admin.home");
    }

    public function profview(){
        return view("admin.prof.home");
    }
    public function profadd(){
        return view('admin.prof.add');
    }
    public function profup(){
        return view("admin.prof.update");
    }

    public function salles(){
        return view('admin.salle.home');
    }
    
    public function salleadd(){
        return view('admin.salle.add');
    }
    
    public function salleup(){
        return view('admin.salle.update');
    }

    public function horaires(){
        return view("admin.horaires.home");
    }
    public function horaireadd(){
        return view("admin.horaires.add");
    }
    public function horaireup(){
        return view("admin.horaires.update");
    }
}
