<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InerfaceController extends Controller
{
    public function home(){
        return view('interface.home');
    }
    public function salles(){
        return view("interface.salles");
    }
    public function salle(){
        return view("interface.salle");
    }

}
