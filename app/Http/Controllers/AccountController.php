<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class AccountController extends Controller
{
    function __construct()
    {
        $this->index = 'admin.account.index';
        $this->delete = '/account';

    }
    public function index(){
        $memberData = User::get();
        return view($this->index,compact('memberData'));
    }

    public function delete($id){
        $memberData = User::find($id);
        $memberData->delete();
        return redirect($this->delete)->with('message','刪除帳號成功');
    }


    public function createView(){
        return view('admin.account.create');
    }
    public function create(Request $request){

        $boolean = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        // dd($boolean->fails());
        if($boolean->fails()){
            return redirect()->back()->withErrors($boolean->errors());
        }

        User::create($request->all());
        return redirect('/admin/account')->with("message",'新增帳號成功');
    }
    public function editView($id){
        $userID = User::find($id);
        return view('admin.account.edit',compact('userID'));
    }
    public function edit(Request $request){

        $boolean = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        // dd($boolean->fails());
        if($boolean->fails()){
            return redirect()->back()->withErrors($boolean->errors());
        }

        User::create([
            'name' => $request->name,
            'email' => $request->eamil,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        return redirect('/admin/account')->with("message",'新增帳號成功');
    }
}
