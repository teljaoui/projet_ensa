<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Models\Tim;
use Illuminate\Http\Request;

class InerfaceController extends Controller
{
    public function home(){
        return view('interface.home');
    }
    public function salles(){
        $salles = Salle::all();
        return view("interface.salles" , compact('salles'));
    }
    public function salle($id){
        $salle = Salle::find($id);
        $tims = Tim::all();
        return view("interface.salle" , compact('salle' , 'tims'));
    }

}
