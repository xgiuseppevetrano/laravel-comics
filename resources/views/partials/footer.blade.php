<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-top__link">
                @foreach ($shopLinks as $shopLink)
                    <a href="#" class="footer-top__item">
                        <img class="footer-top__item-img" src="{{asset($shopLink["src"])}}" alt="{{$shopLink["name"]}}">
                        <small>{{$shopLink["name"]}}</small>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="footer-center">
        <div class="container">
            <div class="footer-center__row">
                @foreach ($footerLinks as $footerLink)
                    <div class="footer-center__col">
                        <h4 class="footer-center__col-title">{{$footerLink["title"]}}</h4>
                        <ul>
                            @foreach ($footerLink["texts"] as $text)
                                <li class="footer-center__col-item">
                                    <a class="footer-center__col-link" href="#">{{$text}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__wrapper">
                <button class="footer-bottom__button">Sign-up now!</button>
                <div class="footer-bottom__social">
                    <span class="footer-bottom__social-text">Follow us</span>
                    @foreach ($socials as $social)
                        <a class="footer-bottom__social-link" href="#">
                            <img class="footer-bottom__social-img" src="{{asset($social["src"])}}" alt="{{$social["name"]}}">
                        </a>  
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>