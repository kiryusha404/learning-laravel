@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Где нас найти?</div>
                </div>
            <div class="row w-100">
                <div class="col-lg-6 my-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115681.29592731265!2d-77.47713270775661!3d25.0326996781907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x892f7c99b981dbc9%3A0x2aef01d3485e50d2!2sNassau%2C%20Bahamy!5e0!3m2!1spl!2spl!4v1624445118063!5m2!1spl!2spl"
                        class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-6 my-4 d-flex align-items-center">
                    <div>
                        <h6>Адрес:</h6>
                        <p>usa, california, briton street 11</p>
                        <h6>Телефон:</h6>
                        <p>+7(999)111-22-54</p>
                        <h6>Email:</h6>
                        <p>sdjffj@mail.com</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
