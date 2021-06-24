<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Product;
use App\ProductsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
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
        return redirect('user/contact_us/create')->with('message','完成送出我們會盡快與您聯絡');
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
