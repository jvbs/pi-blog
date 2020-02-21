<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about');
    }

    public function view2(){
        $data = "bem vindo";

        return view('about2')->with('msg', $data);
    }
}
