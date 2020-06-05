@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                    <div class="card-body">
                            <label>
                                {{ $client->name }}
                            </label>
                            <label>
                                {{ $client->phone }}
                            </label>
                            <label>
                                {{ $client->birthdate }}
                            </label>
                            <hr>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
