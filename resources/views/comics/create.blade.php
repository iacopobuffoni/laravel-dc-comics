@extends('layouts.app')

@section('content')
<main>
    <div class="jumbotron">

    </div>
    <div class="product-back">
        <div class="product-box">
            <h1> Crea un prodotto </h1>
        </div>
        <form action="{{ route('comics.store')}}" method="post">
            @csrf
            <div>
                <label for="title"> Titolo </label>
                <input type="text" name="title" id="title" required maxlength="255">
            </div>
            <div>
                <label for="type"> Tipo </label>
                <select name="type" id="type">
                    <option selected> Seleziona un tipo </option>
                    <option value="comic"> Comic </option>
                    <option value="novel"> Novel </option>
                    <option value="romanzo"> Romanzo </option>

                </select>
            </div>
            <div>
                <label for="price"> Prezzo </label>
                <input type="number" step="0.01" name="price" id="price" required maxlength="255">
            </div>
            <div>
                <label for="description"></label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button type="submit"> Salva </button>
            </div>
        </form>
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