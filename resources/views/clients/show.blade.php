@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                    <div class="card-body">
                        <div>
                            <label> NOME:
                                <label>
                                    {{ $client->name }}
                                </label>
                            </label>
                        </div>
                        <div>
                            <label> TELEFONE:
                                <label>
                                    {{ $client->phone }}
                                </label>
                            </label>
                        </div>
                        <div>
                            <label> DATA DE NASCIMENTO:
                                <label>
                                    {{ $client->birthdate }}
                                </label>
                            </label>
                        </div>
                            <hr>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
