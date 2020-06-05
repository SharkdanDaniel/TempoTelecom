<?php

namespace App\Http\Controllers;

use App\Client;
use App\Product;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('orders.show', [
            'id' => $order,
            'client_id' => $order,
        ]);
    }

    public function create()
    {
        $clients = Client::all();
        $products = Product::all();
        return view('orders.register', compact('products', 'clients'));
    }

    public function store(Request $request, Client $client)
    {
        $client = Client::find($request->client_id);
        $order = new Order(['client_id' => $client->id]);
        $order = $client->order()->save($order);
        foreach($request->products as $product){
            $array_products = ['order_id' => $order->id, 'product_id' => $product];
            $order->products()->attach($array_products);
        }
    }
}
