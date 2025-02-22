<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


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
