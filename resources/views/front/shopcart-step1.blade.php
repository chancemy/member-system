@extends('/template/temp-index')
@section('shopcart-css')
    <link rel="stylesheet" href="./css/step1.css">
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
                    <div class="d-flex align-items-center ml-3 ">$<span class="price">20</span></div>
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
                        <input class="on-change" id="gali-num" type="number" value="1" style="width: 2rem;">
                        </div>
                        <div class="plus">+</div>
                    </div>
                    <div class="d-flex align-items-center ml-3">
                        $<span class="price">10.50</span></div>
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
                    <div class="d-flex align-items-center ml-3 ">$<span class="price">10.50</span></div>
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
            <a href="{{ asset('/') }}"><i class="fas fa-arrow-left"></i><span>返回購物</span></a>
            <a href="{{ asset('step2') }}">
            <button class="btn btn-primary" type="submit">下一步</button>
            </a>
        </div>
        </div>
    </main>
@endsection
@section('shopcart-js')
<script>
    var plus = document.querySelectorAll('.plus');
    var minus = document.querySelectorAll('.minus');
    var onChange = document.querySelectorAll('.on-change');
    var itemQty = 0 ;
    var price = 0 ;
    var elesPrice = document.querySelectorAll('.price');
    var initPrice = [] ;
    console.log(elesPrice);
    elesPrice.forEach(function(ele, index){
      console.log(ele);
      initPrice[index] = elesPrice[index].innerHTML;
    })
    totalCount();

    onChange.forEach((item, index) => {
      item.onchange = function () {
        itemQty = Number(item.value);
        itemQty = check(itemQty);
        onChange[index].value = itemQty;
        elesPrice[index].innerHTML = itemQty * initPrice[index];
        totalCount();
      }
    });
    plus.forEach((item, index) => {
      item.onclick = function () {
        // console.log(item.innerHTML);
        itemQty = Number(onChange[index].value);
        itemQty += 1 ;
        console.log(itemQty);
        onChange[index].value = itemQty;
        elesPrice[index].innerHTML = itemQty * initPrice[index];
        totalCount();
      }

    });
    minus.forEach((item, index) => {
      item.onclick = function () {
        itemQty = Number(onChange[index].value);
        itemQty -= 1 ;
        itemQty = check(itemQty);
        console.log(itemQty);
        onChange[index].value = itemQty;
        elesPrice[index].innerHTML = itemQty * initPrice[index];
        totalCount();
      }
    });
    function check(itemQty){
      if(itemQty < 1){
          itemQty = 1
          console.log(itemQty+'有檢察');
        }
        return itemQty;
    }

    function isShipping(shippingValue){
      if(shippingValue >= 500){
        return 0;
      }else{
        return 60;
      }
    }

    function totalCount() {
      var totalItems = document.querySelector('#total-items');
      var itemsPrice = document.querySelector('#items-price');
      var shipping = document.querySelector('#shipping');
      var totalPrice = document.querySelector('#total-price');
      var totalItemsValue = 0;
      var itemPriceValue = 0;
      var shippingValue = 0;
      var totalPriceValue = 0;
      onChange.forEach(ele => {
        itemQty = Number(ele.value);
        totalItemsValue += itemQty ;
        totalItems.innerHTML = totalItemsValue;
        console.log('總數');
      });
      elesPrice.forEach(ele => {
        price = Number(ele.innerHTML);
        itemPriceValue += price ;
        itemsPrice.innerHTML = itemPriceValue;
        console.log('總計');
      });
      shippingValue = isShipping(itemPriceValue);
      shipping.innerHTML = shippingValue;
      totalPrice.innerHTML = itemPriceValue + shippingValue ;
    }
</script>
@endsection

