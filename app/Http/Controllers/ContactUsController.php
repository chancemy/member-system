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
