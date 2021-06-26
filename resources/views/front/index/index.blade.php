@extends('/template/temp-index')
@section('index-css')
<style>
    .main-photo {
        width: 100%;
        height: 300px;
        background-position: center;
        background-size: cover;
    }
</style>
@endsection
@section('index-main')
<main>
    <div class="A">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height: calc(100vh - 92px);">
                <div class="carousel-item active">
                    <img src="https://news.cgtn.com/news/77416a4e3145544d326b544d354d444d3355444f31457a6333566d54/img/37d598e5a04344da81c76621ba273915/37d598e5a04344da81c76621ba273915.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://news.cgtn.com/news/77416a4e3145544d326b544d354d444d3355444f31457a6333566d54/img/37d598e5a04344da81c76621ba273915/37d598e5a04344da81c76621ba273915.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://news.cgtn.com/news/77416a4e3145544d326b544d354d444d3355444f31457a6333566d54/img/37d598e5a04344da81c76621ba273915/37d598e5a04344da81c76621ba273915.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="B">
        <div class="container custom-container-width-b">
            <div class="row ">
                <div class="col-sm-12 d-flex flex-column align-items-center ">
                    <h1 style="font-size: 1.875rem; line-height: 2.25rem; margin-bottom: 16px;">Raw Denim Heirloom Man
                        Braid</h1>
                    <p style="margin-bottom: 24px;">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                        taxidermy. Gastropub indxgo<br>juice poutine,
                        ramps microdosing banh mi pug.</p>
                    <div class="blue-line mb-5" style="border-radius: 10px;"></div>
                </div>
                <div class="col-sm-12 row no-gutters">
                    <div class="col-sm-12 col-md-4">
                        <div class="card  text-center border-0" style="padding:16px;">
                            <div class="img-center">
                                <div class="circle-photo  d-flex justify-content-center
                align-items-center">
                                    <div class="pic-frame">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-10 h-10"
                                            viewBox="0 0 24 24">
                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <h5 class="card-title" style="font-weight: 500;">Shooting Stars</h5>
                                <p class="card-text" style="margin-bottom: 12px;">Blue bottle crucifix vinyl post-ironic
                                    four dollar toast vegan taxidermy.
                                    Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                                <a href="#" style="display: block; height: 24px;">Learn More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card  text-center border-0" style="padding:16px;">
                            <div class="img-center">
                                <div class="circle-photo  d-flex justify-content-center
                align-items-center">
                                    <div class="pic-frame">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-10 h-10"
                                            viewBox="0 0 24 24">
                                            <circle cx="6" cy="6" r="3"></circle>
                                            <circle cx="6" cy="18" r="3"></circle>
                                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <h5 class="card-title" style="font-weight: 500;">The Catalyzer</h5>
                                <p class="card-text" style="margin-bottom: 12px;">Blue bottle crucifix vinyl post-ironic
                                    four dollar toast vegan taxidermy.
                                    Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                                <a href="#" style="display: block; height: 24px;">Learn More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card  text-center border-0" style="padding:16px;">
                            <div class="img-center">
                                <div class="circle-photo  d-flex justify-content-center
                align-items-center">
                                    <div class="pic-frame">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-10 h-10"
                                            viewBox="0 0 24 24">
                                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <h5 class="card-title" style="font-weight: 500;">Neptune</h5>
                                <p class="card-text" style="margin-bottom: 12px;">Blue bottle crucifix vinyl post-ironic
                                    four dollar toast vegan taxidermy.
                                    Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                                <a href="#" style="display: block; height: 24px;">Learn More ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="button" class="btn btn-primary btn-lg mt-5" style="padding: 8px 32px;">Button</button>
                </div>
            </div>
        </div>
    </div>
    <div class="C">
        <div class="container custom-container-width-b">
            <div class="row" style="margin-bottom: 5rem;">
                <div class="col-12 col-lg-4">
                    <h1 style="font-size: 30px; font-weight: 400;">Master Cleanse Reliac Heirloom</h1>
                </div>
                <div class="col-12 col-lg-8">
                    <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                        farm-to-table.
                        Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
                </div>
            </div>
            <div class="row no-gutters mx-n2">
                <div class="col-6">
                    <div class="row no-gutters">
                        <div class="col-6 p-2">
                            <img class="w-100" src="https://dummyimage.com/500x300" alt="">
                        </div>
                        <div class="col-6 p-2">
                            <img class="w-100" src="https://dummyimage.com/501x301" alt="">
                        </div>
                        <div class="col-12 p-2">
                            <img class="w-100" src="https://dummyimage.com/600x360" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row no-gutters">
                        <div class="col-12 p-2">
                            <img class="w-100" src="https://dummyimage.com/601x361" alt="">
                        </div>
                        <div class="col-6 p-2">
                            <img class="w-100" src="https://dummyimage.com/502x302" alt="">
                        </div>
                        <div class="col-6 p-2">
                            <img class="w-100" src="https://dummyimage.com/503x303" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="D">
        <div class="container custom-container-width-b">
            <div class="row d-flex justify-content-center align-items-center" style="margin-bottom: 5rem;">
                <div class="col-12">
                    <h1 class=" d-flex justify-content-center align-items-center"
                        style="font-size: 36px; font-weight: 400;">Pricing</h1>
                </div>
                <div class="col-12 col-lg-8 d-flex justify-content-center align-items-center">
                    <p>Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan
                        direct trade
                        mumblecore 3 wolf moon twee </p>
                </div>
            </div>
            <div class="row d-flex  justify-content-center align-items-center">
                <div class="col-12 col-lg-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Plan</th>
                                <th scope="col">Speed</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Price</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="start">Pro</th>
                                <td>5 Mb/s</td>
                                <td>15GB</td>
                                <td>Free</td>
                                <td><input type="radio" name="singal"></td>
                            </tr>
                            <tr>
                                <th scope="row">Pro</th>
                                <td>25 Mb/s</td>
                                <td>25GB</td>
                                <td>$24</td>
                                <td><input type="radio" name="singal"></td>
                            </tr>
                            <tr>
                                <th scope="row">Business</th>
                                <td>36 Mb/s</td>
                                <td>40GB</td>
                                <td>$50</td>
                                <td><input type="radio" name="singal"></td>
                            </tr>
                            <tr>
                                <th scope="row">Exclusive</th>
                                <td>48Mb/s</td>
                                <td>120GB</td>
                                <td>$72</td>
                                <td><input type="radio" name="singal"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row d-flex  justify-content-center align-items-center">
                <div class="col-12 col-lg-8 w-100 d-flex justify-content-between">
                    <a href="">Learn More ></a>
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                </div>
            </div>
        </div>
    </div>
    <div class="E">
        <div class="container custom-container-width-b">
            <div class="row no-gutters m-n3">
                <div class="col-6 p-3">
                    <h1 style="font-size: 30px
            ;">Pitchfork Kickstarter Taxidermy</h1>
                </div>
                <div class="col-6 p-3">
                    <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                        farm-to-table.
                        Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food
                        truck ugh
                        squid celiac humblebrag.</p>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 p-3">
                    <div class="card">
                        <img src="https://dummyimage.com/720x400" class="w-100 card-img-top" alt="...">
                        <div class="card-body">
                            <h3>SUBTITLE</h3>
                            <h2 class="card-title">Chichen Itza</h2>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                                disrupt
                                edison bulbche.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 p-3">
                    <div class="card">
                        <img src="https://dummyimage.com/721x401" class="w-100 card-img-top" alt="...">
                        <div class="card-body">
                            <h3>SUBTITLE</h3>
                            <h2 class="card-title">Chichen Itza</h2>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                                disrupt
                                edison bulbche.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 p-3">
                    <div class="card">
                        <img src="https://dummyimage.com/722x402" class="w-100 card-img-top" alt="...">
                        <div class="card-body">
                            <h3>SUBTITLE</h3>
                            <h2 class="card-title">Chichen Itza</h2>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                                disrupt
                                edison bulbche.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 p-3">
                    <div class="card">
                        <img src="https://dummyimage.com/723x403" class="w-100 card-img-top" alt="...">
                        <div class="card-body">
                            <h3>SUBTITLE</h3>
                            <h2 class="card-title">Chichen Itza</h2>
                            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                                disrupt
                                edison bulbche.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="F">
        <div class="container custom-container-width-b text-sm-center text-md-left">
            <div class="row" style="padding: 0px 10%;">
                <div class="col-md-12">
                    <div class="row d-flex flex-wrap justify-content-center ">
                        <div class="col-md-3 col-sm-12 d-flex justify-content-center">
                            <div class="rounded-circle my-circle ">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10 pic-frame" viewBox="0 0 24 24">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 ">
                            <h2>Shooting Stars</h2>
                            <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
                                indxgo juice
                                poutine.
                            </p>
                            <a href="">Learn More ></a>
                        </div>
                        <div class="col-12 ">
                            <hr class="mt-5  mb-5">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row d-flex justify-content-between ">
                        <div class="col-md-3 col-sm-12 order-md-2 d-flex justify-content-center  ">
                            <div class="rounded-circle my-circle ">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="pic-frame sm:w-16 sm:h-16 w-10 h-10 " viewBox="0 0 24 24">
                                    <circle cx="6" cy="6" r="3"></circle>
                                    <circle cx="6" cy="18" r="3"></circle>
                                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-9  col-sm-12 order-md-1">
                            <h2>Shooting Stars</h2>
                            <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
                                indxgo juice
                                poutine.
                            </p>
                            <a href="">Learn More ></a>
                        </div>
                        <div class="col-12 order-md-3">
                            <hr class=" mt-5  mb-5">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row d-flex justify-content-md-between">
                        <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                            <div class="rounded-circle my-circle">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="pic-frame sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <h2>Shooting Stars</h2>
                            <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
                                indxgo juice
                                poutine.
                            </p>
                            <a href="">Learn More ></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5 d-flex justify-content-center ">
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
            </div>
        </div>
    </div>
    <div class="G">
        <div class="container custom-container-width-b">
            <div class="row">
                <div class="col-lg-6">
                    <picture>
                        <source srcset="https://dummyimage.com/400x200" media="(max-width: 960px )">
                        <source srcset="https://dummyimage.com/400x400" media="(max-width: 1140px )">
                        <img src="https://dummyimage.com/400x400" alt="" style="height: 100%;">
                    </picture>
                </div>
                <div class="col-lg-6">
                    <div class="row h-100">
                        <div class="mt-md-3 mt-lg-0 col-12 d-flex flex-column justify-content-center">
                            <h2>BRAND NAME</h2>
                            <h1>The Catcher in the Rye</h1>
                            <div class="d-flex">
                                <span class="text-primary">
                                    <i class="fas fa-star my-font-size"></i><i class="fas fa-star my-font-size"></i><i
                                        class="fas fa-star my-font-size"></i><i class="fas fa-star my-font-size"></i><i
                                        class="far fa-star my-font-size"></i>
                                </span>
                                <span class="mx-2">
                                    4 Reviews
                                </span>
                                <div class="border-left pl-2">
                                    <a class="text-gray-500">
                                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-5 h-5 " style="width: 1rem; height: 1rem;"
                                            viewBox="0 0 24 24">
                                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="text-gray-500">
                                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-5 h-5" style="width: 1rem; height: 1rem;"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="text-gray-500">
                                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="w-5 h-5" style="width: 1rem; height: 1rem;"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                            <p class="pt-3">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha
                                taximy chia
                                microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                                Everyday carry
                                +1
                                seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean
                                shorts keytar
                                banjo
                                tattooed umami cardigan.
                            </p>
                            <div class="row no-gutters">
                                <div class="col-12 d-flex">
                                    <div class="d-flex justify-content-between align-items-center mr-3 ">
                                        <span class="mr-2">Color</span>
                                        <div class="w-50 h-100 d-flex  justify-content-between  align-items-center">
                                            <input type="button" style="width: 1rem; height: 1rem;"
                                                class=" mr-2 rounded-circle border-secondary bg-warning"></input>
                                            <input type="button" style="width: 1rem; height: 1rem;"
                                                class=" mr-2 rounded-circle border-secondary badge-dark"></input>
                                            <input type="button" style="width: 1rem; height: 1rem;"
                                                class=" mr-2 rounded-circle border-secondary badge-light"></input>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="mr-2">Size</span>
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">S
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">S</a>
                                                <a class="dropdown-item" href="#">M</a>
                                                <a class="dropdown-item" href="#">L</a>
                                                <a class="dropdown-item" href="#">XL</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="col-12 my-border">
                                <div class="col-12 ">
                                    <div class="row no-gutters d-flex">
                                        <div class="col-6">
                                            <h1>$58</h1>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end align-items-center">
                                            <button type="button" class="btn btn-primary mr-3">Primary</button>
                                            <button style=" width: 2rem; height: 2rem;"
                                                class=" btn-primary rounded-circle border-0 badge-secondary ">
                                                <svg class="svg-icon" fill="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="H">
        <div class="container custom-container-width-b">
            <div class="row">
                @foreach ($productDatas as $productData)
                <div class="col-sm-12 col-md-6 col-lg-3 mt-4 ">
                    <div class="card">
                        <div class="main-photo" style="background-image: url('{{ $productData->main_photo }}')"></div>
                        <div class="card-body">
                            <h3 style="font-size: 12px;" class="card-title">{{ $productData->type->type_name }}</h3>
                            <h2 style="font-size: 18px;">{{ $productData->product_name }}</h2>
                            <p style="font-size: 16px;" class="card-text">NT$ {{ $productData->product_price }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="I" id="contact_us">
        <div class="my-mask ">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.7214003092126!2d120.71711151484097!3d24.25152107536478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691a0f5d0f58d1%3A0x984554213f4033f4!2z6LGQ5Y6f5buf5p2x5aSc5biC!5e0!3m2!1szh-TW!2stw!4v1619630912041!5m2!1szh-TW!2stw"
                width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container custom-container-width-b my-form-pos">
            <div class="row no-gutters w-100 d-flex justify-content-end align-items-center">
                <div class="col-sm-12 col-md-5 col-lg-4  ">
                    <div class="my-forms">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                        @endif
                        <form class="bg-white p-4 rounded" id="contact-form" name="contact-form"
                            action="{{ asset('/user/contact_us/store') }}" method="POST">
                            <!--Grid row-->
                            @csrf
                            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                            <!--Section description-->
                            <p class="text-center w-responsive mx-auto mb-5">有任何問題請聯絡我們謝謝</p>
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-6 ">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">姓名</label>

                                        <input type="text" id="name"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            class="form-control" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!--Grid column-->
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">信箱</label>

                                        <input type="text" id="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            class="form-control" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="title" class="">主旨</label>

                                        <input type="text" id="title" name="title" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="content">內容</label>

                                        <textarea type="text" id="content" name="content" rows="2"
                                            class="form-control md-textarea" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="text-center text-md-left">
                                <button type="submit" class="btn btn-outline-success mt-2">送出</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
