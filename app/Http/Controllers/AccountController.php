<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $memberData = User::get();
        return view('admin.account.index',compact('memberData'));
    }
}
