<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class TreeViewController extends Controller
{
    public function treeView($refkey)
    {
        if(Auth::check()){
        
        $results = User::where('sponserid', $refkey)->paginate(5);
        // user::where('userid', session('email'))->paginate(5);
        return view('treeview', ['treeviewList' => $results]);
            
        // $usersRef = DB::table('users')-> where('sponserid', $res->referralkey)->get()->toArray();
        
        // return view('users', ['usersList' => $usersRef]);
    }
  
    return redirect("/")->withSuccess('You are not allowed to access');


    }
}
