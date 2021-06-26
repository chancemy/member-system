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
        return view('front.shopcart.shopcart-step1');
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
