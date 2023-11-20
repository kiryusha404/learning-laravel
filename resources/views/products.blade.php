@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Продукты</div>
                </div>
                <div class="d-flex flex-wrap text-center justify-content-evenly">
                    @foreach($products as $product)
                    <div class="card m-4" style="width: 18rem;">
                        <img src="assets/img/{{$product -> img}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product -> name }}</h5>
                            <p class="card-text">{{ $product -> price }} руб.</p>
                            <a href="{{ route('product', ['id' => $product -> id]) }}" class="btn btn-primary">Перейти</a>
                        </div>

                    </div>

                    @endforeach

                </div>

                </div>
            </div>
        </div>
    </div>
@endsection
