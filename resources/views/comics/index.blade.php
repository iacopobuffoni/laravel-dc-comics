@extends('layouts.app')

@section('content')
<main>
    <div class="jumbotron">

    </div>
    <div class="product-back">
        <div class="product-box">
            @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="">
                <h4> {{ $comic->title }} </h4>
                <button>
                    <a href=""> Vedi dettagli </a>
                </button>
            </div>
            @endforeach
        </div>
    </div>
    <footer>
        <div class="main-footer-bar">
            <div class="main-footer-bar-item">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                </div>
                <div class="text">
                    DIGITAL COMICS
                </div>
            </div>
            <div class="main-footer-bar-item">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                </div>
                <div class="text">
                    DC MERCHANDISE
                </div>
            </div>
            <div class="main-footer-bar-item">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                </div>
                <div class="text">
                    SUBSCRIPTION
                </div>
            </div>
            <div class="main-footer-bar-item">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                </div>
                <div class="text">
                    COMIC SHOP LOCATOR
                </div>
            </div>
            <div class="main-footer-bar-item">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                </div>
                <div class="text">
                    DC POWER VISA
                </div>
            </div>
        </div>
    </footer>
</main>
@endsection