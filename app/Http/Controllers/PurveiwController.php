<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PurveiwController extends Controller
{
    function __construct()
    {
        $this->index = 'admin.purview.index' ;
        $this->purview = '/admin/purview/';
    }
    public function index(){
        $memberData = User::get();
        // dd($memberData);
        return view($this->index,compact('memberData'));
    }
    public function purviewUpdate($role,$id){
        // dd($id);
        $oldRole = User::find($id);
        // dd($oldRole->name);
        if($role == 'admin'){

            $oldRole->role = 'admin';

        }else if($role == 'user'){
            $oldRole->role = 'user';
        }
        $oldRole->save();
        // dd( $oldRole->name);
        return redirect($this->purview)->with('message','權限修改成功');
    }
}
