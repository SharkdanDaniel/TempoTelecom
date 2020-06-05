@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                    <div class="card-body">
                        <div>
                            <label> CÓDIGO DO PRODUTO:
                                <label>
                                    {{ $product->id }}
                                </label>
                            </label>
                        </div>

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
                            <hr>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
