@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CLIENTES</div>

                @forelse ($clients as $client)
                <div class="card-body">
                    <a href="{{ $client->path() }}">
                        <div>
                            <label> NOME:
                                <label>
                                    {{ $client->name }}
                                </label>
                            </label>
                        </div>
                    </a>

                    <hr>

                    </div>
                @empty
                    <div class="card-body">Nenhum cliente cadastrado.</div>
                @endforelse

                <div class="card-body">
                    <h5>
                        <div>
                            <a href="{{ route('addClient') }}">Cadastrar Cliente</a>
                        </div>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
