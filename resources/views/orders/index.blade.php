@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PEDIDOS</div>

                @forelse ($orders as $order)
                <div class="card-body">
                    <a href="{{ $order->path() }}">
                        <div>
                            <label> NUMERO DO PEDIDO:
                                <label>
                                    {{ $order->id }}
                                </label>
                            </label>
                        </div>

                        <div>
                            <label> NOME DO CLIENTE:
                                <label>
                                    {{ $order->client->name }}
                                </label>
                            </label>
                        </div>

                        <div>
                            <label> DATA DO PEDIDO:
                                <label>
                                    {{ $order->created_at }}
                                </label>
                            </label>
                        </div>

                        <div>
                            <label> VALOR:
                                <label>
                                    {{ $order->valorNota }}
                                </label>
                            </label>
                        </div>
                    </a>

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
