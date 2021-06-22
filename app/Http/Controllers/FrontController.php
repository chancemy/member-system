<?php

namespace App\Http\Controllers;

use App\ContactUs;
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
}
