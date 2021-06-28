<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Product;
use App\ProductsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index(){
        $productDatas = Product::with('img')->with('type')->get();
        return view('front.index.index',compact('productDatas'));
    }
    public function step1(){
        $productCarts = \Cart::getContent()->sortKeys();
        return view('front.shopcart.shopcart-step1',compact('productCarts'));
    }
    public function step2(){
        return view('front.shopcart.shopcart-step2');

    }
    public function step3(){
        return view('front.shopcart.shopcart-step3');

    }
    public function step4(){
        return view('front.shopcart.shopcart-step4');

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
