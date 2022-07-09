@extends('layouts.base')

@section('title')
    Dc Comics
@endsection

@section('page-content')
    <main>
        <section class="comics">
            <div class="container">
                <button class="comics__button comics__button--position">Current Series</button>
                <div class="comics__list">
                    @foreach ($comics as $comic)
                        <div class="comics__card">
                            <img class="comics__card-img" src="{{asset($comic["thumb"])}}" alt="{{$comic["series"]}}">
                            <small class="comics__card-text">{{$comic["series"]}}</small>
                        </div>
                    @endforeach
                </div>
                <button class="comics__button comics__button--big">Load more</button>
            </div>
        </section>
        <section class="shop">
            <div class="container">
                <div class="shop__link">
                    @foreach ($shopLinks as $shopLink)
                        <a href="#" class="shop__item">
                            <img class="shop__item-img" src="{{asset($shopLink["src"])}}" alt="{{$shopLink["name"]}}">
                            <small>{{$shopLink["name"]}}</small>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection