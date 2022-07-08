<header>
    <div class="header-top">
        <div class="container">
            <small class="header-top__text">Dc power<sup>sm</sup> visa<i class="fa-regular fa-registered"></i></small>
            <small class="header-top__text">Additional dc sites <i class="fa-solid fa-caret-down"></i></small>
        </div>
    </div>
    <div class="container">
        <div class="header-bottom">
            <div class="header-bottom__logo">
                <img class="header-bottom__logo-img" src="{{asset('img/dc-logo.png')}}" alt="header-bottom logo"/>
            </div>
            <nav class="header-bottom__nav">
                <ul class="header-bottom__nav-item">
                    @foreach ($links as $link)
                        <li class="header-bottom__nav-list">
                            <a class="header-bottom__nav-link {{Route::is($link["route"]) ? 'active' : ''}}" href="{{$link["route"] != null ? route($link["route"]) : '#'}}">
                                {{$link["text"]}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <div class="header-bottom__search">
                <input class="header-bottom__search-input" type="text" placeholder="Search">
                <button class="header-bottom__search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
    <section class="jumbotron"></section>
</header>