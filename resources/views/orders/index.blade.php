@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PEDIDOS</div>

                @forelse ($orders as $order)
                    <div class="card-body">
                            <label>
                                {{ $order->id }}
                            </label>
                            <label>
                                {{ $order->client_id }}
                            </label>
                            <hr>
                    </div>
                @empty
                    <div class="card-body">Nenhum pedido cadastrado.</div>
                @endforelse

                <div class="card-body">
                    <h5>
                        <div>
                            <a href="{{ route('addOrder') }}">Fazer um Novo Pedido</a>
                        </div>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
