<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AllusersListController extends Controller
{
    // public function allUsersListPage() {
        
       
    //     if(Auth::check()){
        
    //     $users = User::paginate(5);
        
    //     return view('alluserslist', ['allusersres' => $users]);
    // }
  
    // return redirect("/")->withSuccess('You are not allowed to access');

    // }

    public function allUsersListPage() {
        if(Auth::check()){
        $itemsres = User::whereNull('forenid')
            ->with('childItems')
            ->get();
        
        return view('alluserslist', compact('itemsres'));
        }
    
        return redirect("/")->withSuccess('You are not allowed to access');

    }
    
}
