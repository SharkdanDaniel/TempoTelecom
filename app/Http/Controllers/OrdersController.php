<?php

namespace App\Http\Controllers;

use App\Client;
use App\Product;
use App\Order;
use App\OrderProduct;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    public function index()
    {
        $valorNota = [];
        $orders = Order::all()->map(function ($order) use($valorNota) {
            $ordersProducts = OrderProduct::where('order_id' , $order->id)->get();
            foreach ($ordersProducts as $orderProduct) {
                $product = Product::where('id' , $orderProduct->product_id)->get();
                array_push($valorNota,$product[0]->value);
            }
            $order->valorNota = array_sum($valorNota);
            return $order;
        });

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $produtos = new Collection();

        foreach ($order->products()->get() as $product) {
            $produtos->push(Product::where('id', $product->product_id)->get());
        }
        return view('orders.show', [
            'order' => $order, 'produtos' => $produtos
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
        foreach ($request->products as $product) {
            $order->products()->create(['product_id' => $product, 'order_id' => $order->id]);
        }

        $orders = Order::all();
        return redirect()->route('orders', compact('orders'));
    }
}
