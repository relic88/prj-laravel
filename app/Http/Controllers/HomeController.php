<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*public function index(){
        return 'hi index';
    }*/

    public function index(){
        return view('home',['name'=>'stranger']);
    }
}

