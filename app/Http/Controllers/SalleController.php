<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function home(){
        return view('interface.home');
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
}
