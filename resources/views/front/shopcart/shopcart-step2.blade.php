@extends('/template.temp-index')
@section('shopcart-css')

<link rel="stylesheet" href="{{ asset('css/step2.css') }}">

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
        <form action="{{ asset('user/shop_cart/step2/check') }}" id="payment" method="POST">
            @csrf
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <h3>付款方式</h3>
                        <div class="my-hr invisible"></div>
                        @php
                            $payRadios = Session::get('payment');
                        @endphp
                        <div class="container">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" @if ($payRadios == "creditCard")
                                    checked
                                @endif name="payRadios" id="payRadios1"
                                    value="creditCard" >
                                <label class="form-check-label" for="payRadios1">
                                    信用卡付款
                                </label>
                            </div>
                            <div class="my-hr"></div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" @if ($payRadios == "ATM")
                                    checked
                                @endif name="payRadios" id="payRadios2"
                                    value="ATM">
                                <label class="form-check-label" for="payRadios2">
                                    網路 ATM
                                </label>
                            </div>
                            <div class="my-hr"></div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" @if ($payRadios == "SVC")
                                    checked
                                @endif name="payRadios" id="payRadios3"
                                    value="SVC">
                                <label class="form-check-label" for="payRadios3">
                                    超商代碼
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="my-hr"></div>
                </div>
            </div>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <h3>運送方式</h3>
                        <div class="my-hr invisible"></div>
                        <div class="container">
                            @php
                            $shipRadios = Session::get('shipment');
                            @endphp
                            <div class="form-check">
                                <input class="form-check-input" type="radio" @if ($shipRadios == "blackCat")
                                    checked
                                @endif name="shipRadios" id="shipRadios1"
                                    value="blackCat" >
                                <label class="form-check-label" for="shipRadios1">
                                    黑貓宅配
                                </label>
                            </div>
                            <div class="my-hr"></div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" @if ($shipRadios == "C2C")
                                    checked
                                @endif name="shipRadios" id="shipRadios2"
                                    value="C2C">
                                <label class="form-check-label" for="shipRadios2">
                                    超商店到店
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="my-hr"></div>
                    <div class="col-12"></div>
                </div>
            </div>
        </form>
        <div class="total">
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-10"></div>
                    <div class="col-2">
                        <div class="to-num d-flex justify-content-between align-items-center">
                            <span>數量：{{ $totalQty }}</span>
                            <div class="value ml-3" id="total-items"></div>
                        </div>
                        <div class="items-price d-flex justify-content-between align-items-center">
                            <span>小計：{{ $priceTotal }}</span>
                            <div class="value ml-3" id="items-price"></div>
                        </div>
                        <div class="shipping d-flex justify-content-between align-items-center">
                            <span>運費：{{ $shipingFee }}</span>
                            <div class="value ml-3" id="shipping"></div>
                        </div>
                        <div class="to-price d-flex justify-content-between align-items-center">
                            <span>總計：{{ $total }}</span>
                            <div class="value ml-3" id="total-price"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-hr"></div>
        <div class="opctions d-flex justify-content-between align-items-center">
            <a href="{{ asset('user/shop_cart/step1') }}" class="btn btn-primary">上一步</a>
            <button id="next" class="btn btn-primary">下一步</button>
        </div>
    </div>
</main>
@endsection
@section('shopcart-js')
<script>
    document.querySelector('#next').addEventListener('click',function () {
            var paymentBtns =document.querySelector('input[name="payRadios"]:checked');
            var shipmentBtns =document.querySelector('input[name="shipRadios"]:checked');
            console.log(shipmentBtns);
            if(paymentBtns&&shipmentBtns){
                document.querySelector('#payment').submit();
            }else{
                alert('請選擇付款及運送方式')
            }
        })
</script>
@endsection
