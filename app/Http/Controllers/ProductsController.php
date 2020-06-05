<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product,
        ]);
    }

    public function create()
    {
        return view('products.register');
    }

    protected function validator(Request $request)
    {
        return Validator::make($request,[
            'name' => ['required', 'string', 'max:255'],
            'value' => ['required', 'decimal', 'max:255']
        ]);

    }

    protected function store(Request $request)
    {
        return Product::create([
            'name' => $request['name'],
            'value' => $request['value']
        ]);

        return view('welcome');
    }
}
