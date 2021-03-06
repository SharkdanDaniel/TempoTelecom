@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PRODUTOS</div>

                @forelse ($products as $product)
                    <div class="card-body">
                    <a href="{{ $product->path() }}">
                        <div>
                            <label> NOME:
                                <label>
                                    {{ $product->name }}
                                </label>
                            </label>
                        </div>


                        <div>
                            <label> PREÇO:
                                <label>
                                    R$ {{ $product->value }}
                                </label>
                            </label>
                        </div>
                    </a>

                        <hr>

                    </div>
                @empty
                    <div class="card-body">Nenhum produto cadastrado.</div>
                @endforelse
                <div class="card-body">
                    <h5>
                        <div>
                            <a href="{{ route('addProduct') }}">Adicionar Produto</a>
                        </div>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
