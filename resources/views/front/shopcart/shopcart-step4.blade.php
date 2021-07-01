@extends('/template.temp-index')
@section('shopcart-css')
<link rel="stylesheet" href="{{ asset('css/step4.css') }}">
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
            <div class="my-hr">
            </div>
            <div class="details ">
                <h3>訂單明細</h3>
                @php
                    $qty = 0;
                    $order = Session::get('order');
                @endphp
                @foreach ($order->details as $detail)
                    @php
                        $product = json_decode($detail->old);
                        $qty += $detail->qty;
                        // dd($product);
                    @endphp
                    <div class="my-hr" style="visibility: hidden;"></div>
                        <div class="item d-flex justify-content-between align-items-center">
                            <div class="container" style="padding: 0px;">
                                <div class="row no-gutters">
                                    <div class="col-6 d-flex justify-content-start align-items-center">
                                        <div class="item-photo mr-2">
                                            <img src="{{ asset($product->main_photo) }}" alt="" style="width: 4rem; height: 4rem; border-radius: 50%;">
                                        </div>
                                        <div class="item-data">
                                            <div class="item-name">{{$product->product_name }}</div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end align-items-center">
                                        <div class="item-quantiys d-flex justify-content-between">
                                            <div class="quantiys d-flex justify-content-around align-items-center">
                                                <span>x</span>
                                                <div class="final-totla-num">{{ $detail->qty }}</div>
                                            </div>
                                            <div class="price d-flex align-items-center ml-3 " >$<span id="burrito-price">{{ $detail->qty * $product->product_price }}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            <div class="my-hr">
            </div>
            <div class="final-buyer-data">
                <h3>寄送資料</h3>
                <div class="row no-gutters">
                    <div class="col-1">
                        <span>姓名</span>
                    </div>
                    <div class="col-11">
                        <span>{{ $order->name }}</span>
                    </div>
                    <div class="col-1">
                        <span>電話</span>
                    </div>
                    <div class="col-11">
                        <span>{{ $order->phone }}</span>
                    </div>
                    <div class="col-1">
                        <span>Email</span>
                    </div>
                    <div class="col-11">
                        <span>{{ $order->email }}</span>
                    </div>
                    <div class="col-1">
                        <span>地址</span>
                    </div>
                    <div class="col-11">
                        <span>{{ ($order->zipcode).($order->county).($order->district).($order->address) }}</span>
                    </div>
                </div>
            </div>
            <div class="total">
                <div class="container p-0">
                    <div class="row no-gutters">
                        <div class="col-10"></div>
                        <div class="col-2">
                            <div class="to-num d-flex justify-content-between align-items-center">
                                <span>數量:</span>
                                <div class="value ml-3" id="total-items">{{  $qty }}</div>
                            </div>
                            <div class="items-price d-flex justify-content-between align-items-center">
                                <span>小計:</span>
                                <div class="value ml-3" id="items-price">{{  $order->price -  $order->shipping_fee }}</div>
                            </div>
                            <div class="shipping d-flex justify-content-between align-items-center">
                                <span>運費:</span>
                                <div class="value ml-3" id="shipping">{{  $order->shipping_fee }}</div>
                            </div>
                            <div class="to-price d-flex justify-content-between align-items-center">
                                <span>總計:</span>
                                <div class="value ml-3" id="total-price">{{  $order->price }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-hr">
            </div>
            <div class="opctions d-flex justify-content-between align-items-center">
                <a href="{{ asset('user/shop_cart/step3') }}"><i class="fas fa-arrow-left"></i><span>返回首頁</span></a>
                <a href="{{ asset('/') }}"><button class="btn btn-primary" type="submit">反回購物</button></a>
            </div>
        </div>
    </main>
@endsection

