@extends('/template.temp-index')
@section('shopcart-css')
<link rel="stylesheet" href="{{ asset('css/step3.css') }}">

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
      <div class="container p-0">
        <form id="customerData" action="{{ asset('/user/shop_cart/step3/check') }}" method="POST">
            @csrf
          <div class="form-group">
            <label for="name">姓名</label>
            <input type="text" class="form-control" required name="name" id="name" placeholder="王小明">
          </div>
          <div class="form-group">
            <label for="phone">電話</label>
            <input type="number" class="form-control" required name="phone" id="phone" placeholder="0912345678">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" required name="email" id="email" placeholder="name@example.com">
          </div>
          <div class="form-row city-selector-set">
            <div class="col-4">
                <!-- 縣市選單 -->
                <select class="form-control county"></select>
            </div>
            <div class="col-4">
                <!-- 區域選單 -->
                <select class="form-control district"></select>
            </div>
            <div class="col-4">
                <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
                <input class="form-control zipcode" type="text" size="3" readonly placeholder="郵遞區號">
            </div>
          </div>
        <button class="d-none" id="hideSubmit" type="submit"></button>
        </form>
      </div>
      <div class="my-hr"></div>
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
        <a href="{{ asset('user/shop_cart/step2') }}">
          <button class="btn btn-primary" type="submit">上一步</button>
        </a>
        <button class="btn btn-primary" id="submit">前往結帳</button>
      </div>
    </div>
  </main>
@endsection
@section('shopcart-js')
  <script src="{{asset('js/tw-city-selector.js')}}"></script>
  <script>
    new TwCitySelector({
      el: '.city-selector-set',
      elCounty: '.county', // 在 el 裡查找 element
      elDistrict: '.district', // 在 el 裡查找 element
      elZipcode: '.zipcode' // 在 el 裡查找 element
    });
  </script>
  <script>
      var submitBtn = document.querySelector('#submit');
      var form = document.querySelector('#customerData');
      submitBtn.addEventListener('click',function () {
        document.querySelector('#hideSubmit').click();
      })
  </script>
@endsection


