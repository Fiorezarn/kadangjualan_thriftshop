<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Product = new Product();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showproduct()
    {
        $data = [
            'product' => $this->Product->get()
        ];
        return view('home', $data);
    }

    public function detail($id)
    {
        $products = Product::find($id);
        
        return view("detailproduct", compact('products'));
    }
}
