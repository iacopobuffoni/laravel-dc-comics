@extends('layouts.app')

@section('content')
    <main>
        <div class="jumbotron">

        </div>
        <div class="product-back">
            <div class="product-box">
                <h1> Crea un prodotto </h1>
            </div>
            <button>
                <a href="{{ route('comics.index') }}"> Torna indietro </a>
            </button>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                
            @endif
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div>
                    <label for="title"> Titolo: </label>
                    <input type="text" name="title" id="title" placeholder="Inserisci il titolo" required minlength="10" maxlength="255">
                </div>
                <div>
                    <label for="description"> Descrizione: </label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci una descrizione" required maxlength="255"></textarea>
                </div>
                <div>
                    <label for="thumb"> Immagine: </label>
                    <input type="text" name="thumb" id="thumb" placeholder="Inserisci URL immagine" required>
                </div>
                <div>
                    <label for="price"> Prezzo: </label>
                    <input type="number" name="price" id="price" step="0.01" placeholder="Inserisci il prezzo" required minlength="1">
                </div>
                <div>
                    <label for="series"> Serie: </label>
                    <input type="text" name="series" id="series" placeholder="Inserisci la serie" required>
                </div>
                <div>
                    <label for="sale_date"> Giorno di uscita: </label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Inserisci la data di uscita" required>
                </div>
                <div>
                    <label for="type"> Tipo: </label>
                    <input type="text" name="type" id="type" placeholder="Inserisci il  tipo" required>
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
