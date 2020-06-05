@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <div>
                        <label> NÚMERO DO PEDIDO:
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
                    @foreach( $produtos as $product )                    
                        <div>
                            <label> ID:
                                <label>
                                    {{ $product[0]->id }}
                                </label>
                            </label>
                        </div>

                        <div>
                            <label> NAME:
                                <label>
                                    {{ $product[0]->name }}
                                </label>
                            </label>
                        </div>

                        <div>
                            <label> VALOR:
                                <label>
                                    {{ $product[0]->value }}
                                </label>
                            </label>
                        </div>

                        <hr>
                    @endforeach



                        <hr>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
