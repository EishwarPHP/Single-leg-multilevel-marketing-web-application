<?php

namespace App\Http\Controllers;
use App\Models\Income;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    

    public function levelincome()
    {
    //     $spid = DB::table('users')-> where('email', session('email'))->get();
    //     $datas= $spid;
        
        
    //     $decode=json_decode($datas);

    //     foreach($decode as $res)

    //     $users = DB::table('users')-> where('sponserid', $res->referralkey)->get();
    //     $userro=$users;
        
    //     $decoder=json_decode($userro, true);

    //     foreach($decoder as $data);
        
    //     Income::create([
    //         'userid' => $data['id'],
    //         'day_bal' => ($data['amount']*7)/100,
    //         'current_bal'=>'NULL',
    //         'total_bal'=>'NULL'
    //       ]);
    if(Auth::check()){
        $level= DB::table('users')-> where('email', session('email'))->get();
        $cure=$level;
        $decode=json_decode($cure);
        // return $decode;
        foreach($decode as $res)
        // return $res->referralkey;
        
        $lincome = DB::table('incomes')-> where('userid', $res->referralkey)->paginate(8);
        // return $lincome;
        
        return view('income', ['incomeRes' => $lincome]);
        }

      return redirect("/")->withSuccess('Login details are not valid');

    }

    

    
}
