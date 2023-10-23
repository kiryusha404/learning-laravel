@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Продукты</div>
                </div>
                <div class="d-flex flex-wrap text-center justify-content-evenly">
                   dd($products);
                    <div class="card m-4" style="width: 18rem;">
                        <img src="https://minecraftch.ru/uploads/skins/skin4689_preview.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Название карточки</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Переход куда-нибудь</a>
                        </div>
                    </div>
                    
                    

                </div>

                </div>
            </div>
        </div>
    </div>
@endsection
