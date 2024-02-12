<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroceriesController extends Controller
{
    public function index() {
        return view("groceries.index");
    }
    public function shop() {
        return view("groceries.shop");
    }
    public function register() {
        return view("groceries.register");
    }
    public function login() {
        return view("groceries.login");
    }
}
