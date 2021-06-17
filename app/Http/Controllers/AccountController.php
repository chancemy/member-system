<?php

namespace App\Http\Controllers;

use App\User;
use App\UserClient;
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
        $this->delete = '/admin/account';

    }
    public function index(){
        $memberData = User::get();
        return view($this->index,compact('memberData'));
    }

    public function delete($id){
        $memberData = User::find($id);
        // dd($memberData);

        $memberData->delete();
        return redirect($this->delete)->with('message','刪除帳號成功');
    }


    public function createView(){
        $userData = User::get();
        return view('admin.account.create',compact('userData'));
    }
    public function create(Request $request){
        dd("我有更新");
        $boolean = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        // dd($boolean->fails());
        if($boolean->fails()){
            return redirect()->back()->withErrors($boolean->errors());
        }
        $newRecord = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        // dd($newRecord->id);
        if($newRecord->role == "user"){
            UserClient::create([
                'phone' => $request->phone,
                'address' => $request->address,
                'user_id' => $newRecord->id
            ]);
        }
        return redirect('/admin/account')->with("message",'新增帳號成功');
    }
    public function editView($id){
        $userID = User::find($id);
        return view('admin.account.edit',compact('userID'));
    }
    public function edit(Request $request,$id){

        $boolean = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        // dd($boolean->fails());
        if($boolean->fails()){
            return redirect()->back()->withErrors($boolean->errors());
        }
        $old_user = User::find($id);
        $old_user->name = $request->name;
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        return redirect('/admin/account')->with("message",'新增帳號成功');
    }
}
