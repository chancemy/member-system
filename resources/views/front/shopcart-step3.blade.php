@extends('/template.temp-index')
@section('shopcart-css')
    <link rel="stylesheet" href="./css/step3.css">
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
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">姓名</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="王小明">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">電話</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0912345678">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-row ">
            <div class="form-group col-6">
              <label for="city">地址</label>
              <input type="text" class="form-control" id="city" placeholder="城市">
            </div>
            <div class="form-group col-6">
              <label for="postal"></label>
              <input type="text" class="form-control mt-2" id="postal" placeholder="郵遞區號">
            </div>
            <div class="form-group col-12">
              <label for="address"></label>
              <input type="text" class="form-control " id="address" placeholder="地址">
            </div>
          </div>
        </form>
      </div>
      <div class="details d-none">
        <h3>訂單明細</h3>
        <div class="my-hr" style="visibility: hidden;"></div>
        <div class="item d-flex justify-content-between align-items-center">
          <div class="container" style="padding: 0px;">
            <div class="row no-gutters">
              <div class="col-6 d-flex justify-content-start align-items-center">
                <div class="item-photo mr-2">
                  <img src="./img/捲餅.jpg" alt="" style="width: 4rem; height: 4rem; border-radius: 50%;">
                </div>
                <div class="item-data">
                  <div class="item-name">Chicken momo</div>
                  <div class="item-nmuber">#41551</div>
                </div>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <div class="item-quantiys d-flex justify-content-between">
                  <div class="quantiys d-flex justify-content-around align-items-center">
                    <div class="minus">-</div>
                    <div class="num-value ml-2 mr-2">
                      <input class="on-change" id="burrito-num" type="number" value="1" style="width: 2rem;">
                    </div>
                    <div class="plus">+</div>
                  </div>
                  <div class="price d-flex align-items-center ml-3 " >$<span id="burrito-price">10.50</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-hr"></div>
        <div class="item d-flex justify-content-between align-items-center">
          <div class="container" style="padding: 0px;">
            <div class="row no-gutters">
              <div class="col-6 d-flex justify-content-start align-items-center">
                <div class="item-photo mr-2">
                  <img src="./img/咖哩.jpg" alt="" style="width: 4rem; height: 4rem; border-radius: 50%;">
                </div>
                <div class="item-data">
                  <div class="item-name">Chicken momo</div>
                  <div class="item-nmuber">#41551</div>
                </div>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <div class="item-quantiys d-flex justify-content-between">
                  <div class="quantiys d-flex justify-content-around align-items-center">
                    <div class="minus">-</div>
                    <div class="num-value ml-2 mr-2">
                      <input class="on-change" id="gali-num" type="number" value="1" style="width: 2rem;"  >
                    </div>
                    <div class="plus">+</div>
                  </div>
                  <div class="price d-flex align-items-center ml-3">
                    $<span id="gali-price">10.50</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-hr"></div>
        <div class="item d-flex justify-content-between align-items-center">
          <div class="container" style="padding: 0px;">
            <div class="row no-gutters">
              <div class="col-6 d-flex justify-content-start align-items-center">
                <div class="item-photo mr-2">
                  <img src="./img/甜點.jpg" alt="" style="width: 4rem; height: 4rem; border-radius: 50%;">
                </div>
                <div class="item-data">
                  <div class="item-name">Chicken momo</div>
                  <div class="item-nmuber">#41551</div>
                </div>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <div class="item-quantiys d-flex justify-content-between">
                  <div class="quantiys d-flex justify-content-around align-items-center">
                    <div class="minus">-</div>
                    <div class="num-value ml-2 mr-2">
                      <input class="on-change" id="sweet-num" type="number" value="1" style="width: 2rem;">
                    </div>
                    <div class="plus">+</div>
                  </div>
                  <div class="price d-flex align-items-center ml-3 " >$<span id="sweet-price" >10.50</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-hr"></div>
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
        <a href="{{ asset('step2') }}">
          <button class="btn btn-primary" type="submit">上一步</button>
        </a>
        <a href="{{ asset('step4') }}">
          <button class="btn btn-primary" type="submit">前往結帳</button>
        </a>
      </div>
    </div>
  </main>
@endsection


