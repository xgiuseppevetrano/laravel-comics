<header>
    <header>
        <div class="container">
            <div class="header">
                <div class="header__logo">
                    <img class="header__logo-img" src="{{asset('img/dc-logo.png')}}" alt="header logo"/>
                </div>
                <nav class="header__nav">
                    <ul class="header__nav-item">
                        @foreach ($links as $link)
                            <li class="header__nav-list">
                                <a class="header__nav-link" href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</header>