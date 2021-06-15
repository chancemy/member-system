<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NewsController extends Controller
{
    public function index(){
        if (Gate::allows('admin')){
            return view('admin.news.index');
        }else{
            '沒有管理者權限';
        }

    }
}
