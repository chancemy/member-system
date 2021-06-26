<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/btnLogin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @yield('shopcart-css')
    @yield('index-css')
    <title>Document</title>
    <style>
        .box {
            width: 100%;
            height: 200px;
            background-color: yellow;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="container custom-container-width " style="padding: 0px 32px ;">
            <nav class="navbar navbar-expand-md navbar-light p-0" style="height: 92px;">
                <a class="navbar-brand m-0" style="padding: 16px;" href="{{ asset('/') }}">
                    <img src="{{ asset('img/logo.svg') }}" style="width: 106px ;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" style="height: 52px;" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto p-md-0 ">
                        <li class="nav-item">
                            <button type="button" class="btn my-btn ">Blog </button>
                        </li>
                        <li class="nav-item m-auto">
                            <button type="button" class="btn my-btn">Portfolio</button>
                        </li>
                        <li class="nav-item m-auto">
                            <button type="button" class="btn my-btn">About</button>
                        </li>
                        <li class="nav-item m-auto">
                            <button type="button" class="btn my-btn">Contact</button>
                        </li>
                    </ul>
                    <ul class="link-icon d-flex m-0 p-0">
                        <li class="nav-item d-flex justify-content-center align-items-center ">
                            <a class="nav-link text-dark text-md-left text-right p-0"
                                href="{{ asset('user/shop_cart/step1') }}"><i class="fas fa-shopping-cart"
                                    style="font-size: 24px; margin-left: 8px; padding: 8px 4px; line-height: 1.25rem;"></i></a>
                        </li>
                        <li class="nav-item d-flex justify-content-center align-items-center ">
                            <div class="btn-account nav-link text-dark text-md-left text-sm-left p-0"><i
                                    class="fas fa-user-circle"
                                    style="font-size: 30px;  margin-left: 16px; padding: 8px 4px; line-height: 1.25rem;"></i>
                            </div>
                            <a href="{{ asset('login') }}" class="btn-login d-none">
                                <div class="txt-login">Login</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>

    @yield('index-main')
    @yield('shopcart-step')
    <footer>
        <div class="fat-footer">
            <div class="container custom-container-width-b">
                <div class="row ">
                    <div
                        class="col-lg-3 col-md-4 col-sm-12 d-flex  flex-column justify-content-sm-center align-content-center">
                        <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-start ">
                            <svg style="width: 40px; height: 40px; " class="" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 40 40">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #162446;
                                        }

                                        .cls-2 {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <title>資產 2</title>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_1-2" data-name="圖層 1">
                                        <circle class="cls-1" cx="20" cy="20" r="20"></circle>
                                        <path class="cls-2"
                                            d="M20,7l7.13,4.11a7.91,7.91,0,0,1,3.95,6.84v6.8l-8.61-5V18.32l7.37,4.26V18.63a7.89,7.89,0,0,0-3.95-6.85L21.28,9.1V33.25L9,26.14V13.35l5.89,3.4a7.91,7.91,0,0,1,3.95,6.85v4.76l-1.23-.71V24.31a7.92,7.92,0,0,0-4-6.85l-3.42-2v9.94L20,31.11Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class=" ml-3 d-flex justify-content-center align-items-center">數位方塊</span>
                        </div>

                        <div class="text-wrap text-center text-md-left d-flex  flex-column">
                            <span class="mt-2 text-sm text-gray-500 ">Air plant banjo lyft occupy retro </span>
                            <span>adaptogen indego</span>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 text-center ">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <ul>
                                    <li>
                                        <h2 style="font-size: .875rem;">CATEGORIES</h2>
                                    </li>
                                    <li>First Link</li>
                                    <li>Second Link</li>
                                    <li>Third Link</li>
                                    <li>Fourth Link</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <ul>
                                    <li>
                                        <h2 style="font-size: .875rem;">CATEGORIES</h2>
                                    </li>
                                    <li>First Link</li>
                                    <li>Second Link</li>
                                    <li>Third Link</li>
                                    <li>Fourth Link</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <ul>
                                    <li>
                                        <h2 style="font-size: .875rem;">CATEGORIES</h2>
                                    </li>
                                    <li>First Link</li>
                                    <li>Second Link</li>
                                    <li>Third Link</li>
                                    <li>Fourth Link</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <ul>
                                    <li>
                                        <h2 style="font-size: .875rem;">CATEGORIES</h2>
                                    </li>
                                    <li>First Link</li>
                                    <li>Second Link</li>
                                    <li>Third Link</li>
                                    <li>Fourth Link</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer d-flex align-items-center" style="background-color: #f3f4f6; height: 3rem;">
            <div class="container custom-container-width-c">
                <div class="row d-flex flex-wrap ">
                    <div class=" col-12 col-sm-6 d-flex justify-content-center justify-content-sm-start ">
                        <span class="d-flex align-items-center">© 2020 Tailblocks —</span>
                        <a style="color: black;" class="ml-2 d-flex align-items-center " href="">@Jack</a>
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end ">
                        <span class="d-flex align-items-center">
                            <a class="text-gray-500  ">
                                <svg fill="currentColor" class="svg-icon" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-3 text-gray-500  ">
                                <svg fill="currentColor" class="svg-icon" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-3 text-gray-500  ">
                                <svg fill="none" class="svg-icon" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                            <a class="ml-3 text-gray-500  ">
                                <svg fill="currentColor" class="svg-icon" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path stroke="none"
                                        d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                    </path>
                                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script>
        var btnAccount = document.querySelector('.btn-account');
    var btnLogin = document.querySelector('.btn-login');
    btnAccount.onclick = function () {
      btnLogin.classList.toggle('d-none');
      window.event ? window.event.cancelBubble = true : e.stopPropagation();
    }

    window.addEventListener('click',function() {

        btnLogin.classList.add('d-none');

    })
    </script>
    @yield('shopcart-js')
</body>

</html>
