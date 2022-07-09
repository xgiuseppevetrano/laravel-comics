@extends('layouts.base')

@section('title')
    Comic
@endsection

@section('page-content')
    <main>
        <section class="comic">
            <div class="comic__cover">
                <div class="container">
                    <div class="comic__cover-box">
                        <img class="comic__cover-img" src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
                        <div class="comic__cover-type">
                            <small>{{$comic["type"]}}</small>
                        </div>
                        <div class="comic__cover-gallery">
                            <small>View gallery</small>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="comic-center__info">
                        <div class="comic-center__info-dx">
                            <h3 class="comic-center__info-title">Talent</h3>
                            <div class="comic-center__row">
                                <small class="comic-center__row-title">Art by:</small>
                                <p class="comic-center__row-text">
                                    @foreach ($comic["artists"] as $artist)
                                        <small>
                                            <a class="comic-center__row-link" href="#">{{$artist}}</a>@if(!$loop->last), @endif
                                        </small>
                                    @endforeach
                                </p>
                            </div>
                            <div class="comic-center__row">
                                <small class="comic-center__row-title">Written by:</small>
                                <p class="comic-center__row-text">
                                    @foreach ($comic["writers"] as $writen)
                                        <small>
                                            <a class="comic-center__row-link" href="#">{{$writen}}</a>@if(!$loop->last), @endif
                                        </small>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="comic-center__info-sx">
                            <h3 class="comic-center__info-title">Specs</h3>
                            <div class="comic-center__row">
                                <small class="comic-center__row-title">Series:</small>
                                <small>
                                    <a class="comic-center__row-link comic-center__row-link--big" href="#">{{$comic["series"]}}</a>
                                </small>
                            </div>
                            <div class="comic-center__row">
                                <small class="comic-center__row-title">U.S. Price:</small>
                                <small>{{$comic["price"]}}</small>
                            </div>
                            <div class="comic-center__row">
                                <small class="comic-center__row-title">On Sale Date:</small>
                                <small>{{$comic["sale_date"]}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comic-bottom">
                <div class="container">
                    <div class="comic-bottom__row">
                        <div class="comic-bottom__col">
                            <small class="comic-bottom__col-title">Digital comics</small>
                            <img class="comic-bottom__col-img" src="{{asset('img/cta-icon-1.png')}}" alt="digital comics">
                        </div>
                        <div class="comic-bottom__col">
                            <small class="comic-bottom__col-title">Shop dc</small>
                            <img class="comic-bottom__col-img" src="{{asset('img/cta-icon-2.png')}}" alt="shop dc">
                        </div>
                        <div class="comic-bottom__col">
                            <small class="comic-bottom__col-title">Comic shop locator</small>
                            <img class="comic-bottom__col-img" src="{{asset('img/cta-icon-3.png')}}" alt="comic shop locator">
                        </div>
                        <div class="comic-bottom__col">
                            <small class="comic-bottom__col-title">Subscriptions</small>
                            <img class="comic-bottom__col-img" src="{{asset('img/cta-icon-4.png')}}" alt="subscriptions">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection