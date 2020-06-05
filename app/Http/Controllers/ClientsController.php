<?php

namespace App\Http\Controllers;

use App\Client;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function show(Client $client)
    {
        return view('clients.show', [
            'name' => $client,
            'phone' => $client,
            'birthdate' => $client,
        ]);
    }

    public function create()
    {
        return view('clients.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:9','max:11'],
            'birthdate' => ['required', 'date', 'min:10', 'max:10']
        ]);
    }

    protected function store(Request $request)
    {
        return Client::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'birthdate' => $request['birthdate']
        ]);
    }
}
