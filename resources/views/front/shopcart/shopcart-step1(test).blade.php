@extends('/template/temp-index')
@section('shopcart-css')
<link rel="stylesheet" href="{{ asset('css/step1.css') }}">
@endsection
@section('shopcart-step')
<main>
    <div class="cart-container">
        <div class="title">
            <h1>購物車</h1>
        </div>
        <div class="setup-group">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row no-gutters">
                            <div class="col-3">
                                <div class="my-step">
                                    <div class="num1 num">
                                        <div class="my-step-num">1</div>
                                    </div>
                                    <span>確認購物車</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="my-step">
                                    <div class="num2 num">
                                        <div class="my-step-num ">2</div>
                                    </div>
                                    <span>付款與運送方式</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="my-step">
                                    <div class="num3 num">
                                        <div class="my-step-num ">3</div>
                                    </div>
                                    <span>填寫資料</span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="my-step">
                                    <div class="num4 num">
                                        <div class="my-step-num">4</div>
                                    </div>
                                    <span>完成訂購</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-hr"></div>
        <div class="details">
            <h3>訂單明細</h3>
            @foreach ($productCarts as $productCart)
            @php
                // dd($productCart->attributes->main_photo );
            @endphp
            <div class="item d-flex justify-content-between align-items-center">
                <div class="container" style="padding: 0px;">
                    <div class="row no-gutters">
                        <div class="col-6 d-flex justify-content-start align-items-center">
                            <div class="item-photo mr-2">
                                <img src="{{ $productCart->attributes->main_photo }}" alt="" style="width: 4rem; height: 4rem; border-radius: 50%;">
                            </div>
                            <div class="item-data">
                                <div class="item-name">{{ $productCart->name }}</div>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
                            <div class="item-quantiys d-flex justify-content-between">
                                <div class="quantiys d-flex justify-content-around align-items-center">
                                    <button type="button"  class="btn minus">-</button>
                                        <input data-id="{{ $productCart->id }}" class="on-change num-value ml-2 mr-2" id="burrito-num" type="number" value="{{ $productCart->quantity }}"style="width: 2rem;">
                                    <button type="button" class="btn plus">+</button>
                                </div>
                                <div class="d-flex align-items-center ml-3 ">$<span
                                        class="price">{{ $productCart->price}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-hr"></div>
            @endforeach
        </div>
        <div class="total">
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-10"></div>
                    <div class="col-2">
                        <div class="to-num d-flex justify-content-between align-items-center">
                            <span>數量:</span>
                            <div class="value ml-3" id="total-items"></div>
                        </div>
                        <div class="items-price d-flex justify-content-between align-items-center">
                            <span>小計:</span>
                            <div class="value ml-3" id="items-price"></div>
                        </div>
                        <div class="shipping d-flex justify-content-between align-items-center">
                            <span>運費:</span>
                            <div class="value ml-3" id="shipping"></div>
                        </div>
                        <div class="to-price d-flex justify-content-between align-items-center">
                            <span>總計:</span>
                            <div class="value ml-3" id="total-price"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-hr"></div>
        <div class="opctions d-flex justify-content-between align-items-center">
            <a href="{{ asset('/') }}"><i class="fas fa-arrow-left"></i><span>返回購物</span></a>
            <a href="{{ asset('user/shop_cart/step2') }}">
                <button class="btn btn-primary" type="submit">下一步</button>
            </a>
        </div>
    </div>
</main>
@endsection
@section('shopcart-js')
<script>
    var inputBtns = document.querySelectorAll('.on-change');
    var plus = document.querySelectorAll('.plus');
    var minus = document.querySelectorAll('.minus');

    inputBtns.forEach(function (inputBtn) {
        inputBtn.addEventListener('change',function () {
            console.log(inputBtn.value);
            var inputNum = inputBtn.value;
        })
    })

    plus.forEach(function (plusBtn) {
        plustBtn.addEventListener('click',function () {
            calcBtn(plus,1);
        })
    })

    minus.forEach(function (minusBtn) {
        minustBtn.addEventListener('click',function () {
            calcBtn(minus,-1);
        })
    })


    function calcBtn(eles,calc) {
        eles.forEach(function (ele) {
            ele.addEventListener('click',function () {
                var input =  ele.parentElement.querySelector('input');
                var itemQty =  input.value;
                itemQty = itemQty + calc ;
                console.log(itemQty);
            })
        })
    }
</script>
@endsection
