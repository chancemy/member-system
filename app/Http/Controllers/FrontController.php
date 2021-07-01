<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\ContactUs;
use App\OrderDetails;
use App\ProductsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{

    public static function countCart(){

        $totalQty = \Cart::getTotalQuantity();
        $priceTotal = \Cart::getSubTotal();
        $shipingFee = $priceTotal > 1000 ? 0 : 60 ;
        $total = $priceTotal + $shipingFee ;

        return compact('totalQty','priceTotal','shipingFee','total');
    }

    public function index(){
        $productDatas = Product::with('img')->with('type')->get();
        return view('front.index.index',compact('productDatas'));
    }

    public function step1(){
        $productCarts = \Cart::getContent()->sortKeys();
        // return view('front.shopcart.shopcart-step1(test)',compact('productCarts'));
        return view('front.shopcart.shopcart-step1',compact('productCarts'));
    }
    public function step2(){
        // $countCart =  FrontController::countCart();
        $totalQty = \Cart::getTotalQuantity();
        $priceTotal = \Cart::getSubTotal();
        $shipingFee = $priceTotal > 1000 ? 0 : 60 ;
        $total = $priceTotal + $shipingFee ;
        // dd($countCart);
        return view('front.shopcart.shopcart-step2',$this->countCart());

    }
    public function step2check(Request $request){
        // dd($request->all());
        Session::put('payment',$request->payRadios);
        Session::put('shipment',$request->shipRadios);
        // dd(session()->all());
        return redirect('/user/shop_cart/step3');

    }
    public function step3(){
        $totalQty = \Cart::getTotalQuantity();
        $priceTotal = \Cart::getSubTotal();
        $shipingFee = $priceTotal > 1000 ? 0 : 60 ;
        $total = $priceTotal + $shipingFee ;
        if(Session::has('payment')&&Session::has('shipment')){

            return view('front.shopcart.shopcart-step3',$this->countCart());

        }else{
            return view('front.shopcart.shopcart-step2');
        }

    }
    public function step3check(Request $request){
        // dd($request->all());
        $order = Order::create([
            'order_no'=>'DP'.time().rand(1,999),
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'county'=>$request->county,
            'district'=>$request->district,
            'zipcode'=>$request->zipcode,
            'address'=>$request->address,
            'price'=>999999999,
            'pay_type'=>Session::get('payment'),
            'shipping'=>Session::get('shipment'),
            'shipping_fee'=>9999999,
            'shipping_status_id'=>0,
            'order_status_id'=>0
        ]);

        $cartProducts = \Cart::getContent();
        $totalPrice = 0;
        $totalQty = 0;
        foreach ($cartProducts as $cartProduct) {
            $product = Product::find($cartProduct->id);
            $totalPrice += $product->product_price * $cartProduct->quantity;
            $orderDetails = OrderDetails::create([
                'order_id'=>$order->id,
                'product_id'=>$product->id,
                'qty'=>$cartProduct->quantity,
                'old'=>json_encode($product)
            ]);
        }
        $order->update([
            'price'=>$totalPrice,
            'shipping_fee' => $totalPrice > 1000 ? 0 : 60,
        ]);
        Session::forget('payment');
        Session::forget('shipment');

        \Cart::clear();
        return redirect('/user/shop_cart/step4')->with('order',$order);

    }
    public function step4(){

        if(Session::has('order')){
            return view('front.shopcart.shopcart-step4');
        }else{
            return redirect('/')->with('message','先去挑點商品吧');
        }

    }

    public function add(Request $request){
        $product = Product::find($request->productId);
        // dd($product);

        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => 1,
            'attributes' => array(
                'main_photo' => $product->main_photo,
            )
        ));
        return 'success' ;

    }

    public function update(Request $request){
        // dd($request->productId);
        \Cart::update($request->productId, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->productQty,
            ),
          ));
        return 'success' ;
    }

    public function delete(){
        \Cart::clear();
    }

    public function content(){
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }

    public function contactUsView(){
        return view('front.contact_us.index');
    }


    public function store(Request $request){
        $boolean = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            // 'content' => ['required', 'string', 'max:255'],
            // 'title' => ['required', 'string', 'max:255'],
        ]);
        // dd($boolean->fails());
        if($boolean->fails()){
            return redirect()->back()->withErrors($boolean->errors());
        }
        ContactUs::create($request->all());
        return redirect('/#contact_us')->with('message','完成送出我們會盡快與您聯絡')->with('point','contact');
    }

    public function productsView(Request $request){
        $typeDatas = ProductsType::get();
        if($request->type_id){
            $productDatas = Product::with('type')->with('img')->where('product_type_id',$request->type_id)->get();
        }else{
            $productDatas = Product::with('type')->with('img')->get();
        }


        // foreach ($productDatas as $productData) {
        //    dd($productData->img);
        //    $photos = $productData->img;
        //    foreach ($photos as $photo) {
        //        dd($photo);
        //    }
        // }
        return view('front.product.index',compact('productDatas','typeDatas'));
    }
}
