@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fazer pedido</div>

                <div class="card-body">
                    <form method="POST" action="{{ ('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-md-8 col-form-label">Selecione o cliente
                                <select required name="client_id" class="form-control">
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-8 col-form-label ">Selecione um ou mais produtos pressionando a tecla CTRL
                                <select id="products-list" required multiple name="products[]" class="form-control">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}" data-value="{{ $product->value }}" >{{ $product->name}}  -  R$ {{ $product->value}}</option>
                                    @endforeach
                                </select>

                            </label>
                        </div>

                        <div>Valor total: <div id="total-price">R$ 0.00</div></div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Confirmar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
