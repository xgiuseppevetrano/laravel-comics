@extends('layouts.base')

@section('title')
    Comic
@endsection

@section('page-content')
    <main>
        <section class="comic">
            <div class="container">
                <div class="comic-top">
                    <div class="comic-top__dx">
                        <h1 class="comic-top__title">{{$comic["title"]}}</h1>
                        <div class="comic-top__store">
                            <div class="comic-top__store-dx">
                                <span>U.S. Price: <span class="comic-top__store-price">{{$comic["price"]}}</span></span>
                                <span class="comic-top__store-available">Available</span>
                            </div>
                            <div class="comic-top__store-sx">
                                <span>Check Availability <i class="fa-solid fa-caret-down"></i></span>
                            </div>
                        </div>
                        <p class="comic-top__description">{{$comic["description"]}}</p>
                    </div>
                    <div class="comic-top__sx">
                        <span class="comic-top__sx-adv">Advertisement</span>
                        <img src="{{asset('img/adv.jpg')}}" alt="adv img">
                    </div>
                </div>
            </div>
            <div class="comic-center">
                <div class="container">
                    <div>
                        
                    </div>
                </div>
            </div>
            <div class="comic-bottom">
                <div class="container">

                </div>
            </div>
        </section>
    </main>
@endsection