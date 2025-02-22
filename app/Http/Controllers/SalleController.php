<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function home(){
        return view('interface.home');
    }
}
