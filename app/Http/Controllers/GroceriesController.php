<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class GroceriesController extends Controller
{
    public function index() {
        //$products = Product::all();
        //dd($products);
        // echo "<pre>";
        // print_r($products);
        // echo "</pre>";
        // die();

        return view("groceries.index");
    }
    public function shop() {
        $products = Product::all();
        $categories = Category::all();
        return view("groceries.shop", compact("products","categories"));
    }
    public function register() {
        return view("groceries.register");
    }
    public function login() {
        return view("groceries.login");
    }
    public function contact() {
        return view("groceries.contact");
    }
}
