<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UsersController extends Controller
{

    public function usersPage() {
        
        if(Auth::check()){
            return view('users');
        }
  
        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function index()
    {
        if(Auth::check()){
        
        $spid = DB::table('users')-> where('email', session('email'))->get();
        $datas= $spid;
        // return $datas;
        
        $decode=json_decode($datas);

        foreach($decode as $res)

        $users = User::where('sponserid', $res->referralkey)->paginate(10);
        // user::where('userid', session('email'))->paginate(5);
        return view('users', ['usersList' => $users]);

        // $usersRef = DB::table('users')-> where('sponserid', $res->referralkey)->get()->toArray();
        
        // return view('users', ['usersList' => $usersRef]);
    }
  
    return redirect("/")->withSuccess('You are not allowed to access');


    }

    public function allUsersListPage() {
        if(Auth::check()){
        $itemsres = User::where('email',session('email'))
            ->with('childItems')
            ->get();
        
        return view('users', compact('itemsres'));
        }
    
        return redirect("/")->withSuccess('You are not allowed to access');

    }

}
