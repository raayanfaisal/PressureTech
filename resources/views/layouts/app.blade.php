<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PRESSURETECH MALDIVES</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        * {
            text-decoration: none;
        }
        
        title {
            color: #006994;
        }

        html {
            scroll-behavior: smooth;

        }

        body {
            background-color: white;
        }
        .main-text  {
            font-size: 15px;
        }
        
        .ctn {
            font-size: 15px;
        }

        .mail {
            font-size: 15px;
        }

        p {
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
        }
        .question-01 {
            color: lightblue;
            font-weight: 500;
        }

        .navbar-brand {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            color: #006994;
        }
        
        .card {
            border: none;
        }

        .products {
            margin-top: 100px;
        }

        .heading-02 {
            padding-top: 100px;
        }

        footer {
            background-color: lightgreen;
        }

        a{
            
        }

        .container {
    margin-top: 50px
}

h3.h3 {
    text-align: center;
    margin: 1em;
    text-transform: capitalize;
    font-size: 1.7em
}

.demo {
    padding: 45px 0
}

.product-grid2 {
    font-family: 'Open Sans', sans-serif;
    position: relative
}

.product-grid2 .product-image2 {
    overflow: hidden;
    position: relative
}

.product-grid2 .product-image2 a {
    display: block
}

.product-grid2 .product-image2 img {
    width: 100%;
    height: auto
}

.product-image2 .pic-1 {
    opacity: 1;
    transition: all .5s
}

.product-grid2:hover .product-image2 .pic-1 {
    opacity: 0
}

.product-image2 .pic-2 {
    width: 100%;
    height: 100%;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    transition: all .5s
}

.product-grid2:hover .product-image2 .pic-2 {
    opacity: 1
}

.product-grid2 .social {
    padding: 0;
    margin: 0;
    position: absolute;
    bottom: 50px;
    right: 25px;
    z-index: 1
}

.product-grid2 .social li {
    margin: 0 0 10px;
    display: block;
    transform: translateX(100px);
    transition: all .5s
}

.product-grid2:hover .social li {
    transform: translateX(0)
}

.product-grid2:hover .social li:nth-child(2) {
    transition-delay: .15s
}

.product-grid2:hover .social li:nth-child(3) {
    transition-delay: .25s
}

.product-grid2 .social li a {
    color: #505050;
    background-color: #fff;
    font-size: 17px;
    line-height: 45px;
    text-align: center;
    height: 45px;
    width: 45px;
    border-radius: 50%;
    display: block;
    transition: all .3s ease 0s
}

.product-grid2 .social li a:hover {
    color: #fff;
    background-color: #3498db;
    box-shadow: 0 0 10px rgba(0, 0, 0, .5)
}

.product-grid2 .social li a:after,
.product-grid2 .social li a:before {
    content: attr(data-tip);
    color: #fff;
    background-color: #000;
    font-size: 12px;
    line-height: 22px;
    border-radius: 3px;
    padding: 0 5px;
    white-space: nowrap;
    opacity: 0;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: -30px
}

.product-grid2 .social li a:after {
    content: '';
    height: 15px;
    width: 15px;
    border-radius: 0;
    transform: translateX(-50%) rotate(45deg);
    top: -22px;
    z-index: -1
}

.product-grid2 .social li a:hover:after,
.product-grid2 .social li a:hover:before {
    opacity: 1
}

.product-grid2 .add-to-cart {
    color: #fff;
    background-color: #404040;
    font-size: 15px;
    text-align: center;
    width: 100%;
    padding: 10px 0;
    display: block;
    position: absolute;
    left: 0;
    bottom: -100%;
    transition: all .3s
}

.product-grid2 .add-to-cart:hover {
    background-color: #3498db;
    text-decoration: none
}

.product-grid2:hover .add-to-cart {
    bottom: 0
}

.product-grid2 .product-new-label {
    background-color: #3498db;
    color: #fff;
    font-size: 17px;
    padding: 5px 10px;
    position: absolute;
    right: 0;
    top: 0;
    transition: all .3s
}

.product-grid2:hover .product-new-label {
    opacity: 0
}

.product-grid2 .product-content {
    padding: 20px 10px;
    text-align: center
}

.product-grid2 .title {
    font-size: 17px;
    margin: 0 0 7px
}

.product-grid2 .title a {
    color: #303030
}

.product-grid2 .title a:hover {
    color: #3498db
}

.product-grid2 .price {
    color: #303030;
    font-size: 15px
}

@media screen and (max-width:990px) {
    .product-grid2 {
        margin-bottom: 30px
    }
}

.about-text {

    font-size: 25px;
    font-family: 'Roboto', sans-serif;
}

ul#menu1 li {
    display: inline;
}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #006994;">
                    PRESSURETECH MALDIVES
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="m-3"><a href="/">Home</li>
                        <li class="m-3"><a href="/aboutus">About</li>
                        <li class="m-3"><a href="/products">Products</li>
                        <li class="m-3"><a href="#ctn">contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
