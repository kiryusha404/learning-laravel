@extends('layouts.app')

@section('content')

    @foreach($products as $product)
        <div class="m-4" style="width: 18rem;">
            <img src="/assets/img/{{$product -> img}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product -> name }}</h5>
                <p class="card-text">Цена: {{ $product -> price }} руб.</p>
                <p class="card-text"> Год выпуска: {{ $product -> year }} год</p>
                <p class="card-text">{{ $product -> model }} </p>
            </div>

        </div>

    @endforeach
@endsection
