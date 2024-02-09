<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{

    public function index()
    {

        $welcome_msg = "Welcome to my site";
        $var2 = "valor 2";
        $var3 = "valor 3";
        //Mostrar en vista
        //return view('index', ["welcome_msg" => $welcome_msg, "var2" => $var2, "var3" => $var3]);
        return view('index', compact('welcome_msg', 'var2', 'var3'));
    }

    public function services()
    {
        return view('services');
    }

    public function products()
    {
        return view('products');
    }

    public function contact()
    {
        return view('contact');
    }
}
