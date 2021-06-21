<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function adminIndex(){
        $record = ContactUs::get();
        return view('admin.contact_us.index',compact('record'));
    }
    public function create(){
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
        return redirect('index/contact_us/create')->with('message','完成送出我們會盡快與您聯絡');
    }
    public function read($id){
        $record = ContactUs::find($id);
         return view('admin.contact_us.read',compact('record'));
    }
    public function delete($id){
        $record = ContactUs::find($id);
        $record->delete();
        return redirect('/admin/contact_us')->with('message','刪除留言成功');
    }
}
