<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class APIEcommerceController extends Controller
{
    public function products() {
        // $products = Product::all();
        $products = Product::with("category")->get();
        return response()->json($products);
    }

    public function products_dt(Request $request) {
        $category = $request->input('category'); // Se obtiene los valores de 'category'
        $query = Product::query()->with("category");
        if ($category) {
            $query->whereHas('category', function($q) use ($category) {
                $q->where('name', $category);
            });
        }
        $products = $query->get();
        return response()->json(["data" => $products]);
    }
}
