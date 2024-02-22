<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view("groceries.product_details", compact("product"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        if ($request->isMethod('post'))
        {
            $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|max:50',
            'message' => 'required',
            ],[
            'fullname.required' => 'Proporciona nombre completo.',
            'email.max' => 'Email con máximo 50 caracteres.',
            'message.required' => 'Favor de escribir el mensaje.',
            ]);
            $comments = new Comments();
            $comments->fullname = $request->input('fullname');
            $comments->email = $request->input('email');
            $comments->message = $request->input('message');
            $comments->category_id = $request->input('category_id');
            $comments->category_id = $id;
            $comments->save();
            return redirect()->route('product_details.index', ['category_id'=>$id])->with('success', 'You message has been sent.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
