<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PurveiwController extends Controller
{
    public function index(){
        $memberData = User::get();
        // dd($memberData);
        return view('admin.purview.index',compact('memberData'));
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
        return redirect('/admin/purview/')->with('message','權限修改成功');
    }
}
