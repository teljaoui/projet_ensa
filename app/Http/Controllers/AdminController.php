<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('login');
    }
    public function compte(){
        $page_title = "Paramètres du compte";
        return view('admin.admin' , compact('page_title'));
    }




}
