<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GroceriesController extends Controller
{
    public function index() {
        $products = Product::all();

        //dd($products);
        echo "<pre>";
        print_r($products);
        echo "</pre>";
        die();

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
