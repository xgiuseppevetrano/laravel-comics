<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');
    $links = [
        "Characters",
        "Comics",
        "Movie",
        "Tv",
        "Games",
        "Collectibles",
        "Videos",
        "Fans",
        "News",
        "Shop"
    ];

    $shopLinks = [
        [
            "name" => "Digital Comics",
            "src" => "img/buy-comics-digital-comics.png"
        ],
        [
            "name" => "Dc merchandise",
            "src" => "img/buy-comics-merchandise.png"
        ],
        [
            "name" => "Subscription",
            "src" => "img/buy-comics-subscriptions.png"
        ],
        [
            "name" => "Comics shop locator",
            "src" => "img/buy-comics-shop-locator.png"
        ],
        [
            "name" => "Dc power pisa",
            "src" => "img/buy-dc-power-visa.svg"
        ]
    ];

    $footerLinks = [
        [
            "title" => "Dc comics",
            "texts" => [
                'Characters',
                'Comics',
                'Movies',
                'TV',
                'Games',
                'Videos',
                'News'
            ]
        ],
        [
            "title" => "Shop",
            "texts" => [
                'Shop DC',
                'Collectibles',
            ]
        ],
        [
            "title" => "Dc",
            "texts" => [
                'Terms Of Use',
                'Privacy policy',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscriptions',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
            ]
        ],
        [
            "title" => "Sites",
            "texts" => [
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa'
            ]
        ]
    ];

    $socials = [
        [
            "name" => "facebook",
            "src" => "img/footer-facebook.png"
        ],
        [
            "name" => "twitter",
            "src" => "img/footer-twitter.png"
        ],
        [
            "name" => "youtube",
            "src" => "img/footer-youtube.png"
        ],
        [
            "name" => "pinterest",
            "src" => "img/footer-pinterest.png"
        ],
        [
            "name" => "periscope",
            "src" => "img/footer-periscope.png"
        ]
    ];

    return view('home', compact('comics', 'links', 'shopLinks', 'footerLinks', 'socials'));
});
