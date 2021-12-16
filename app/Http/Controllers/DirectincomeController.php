<?php

namespace App\Http\Controllers;
use App\Models\Income;
use App\Models\DirectIncome;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DirectincomeController extends Controller
{
    

    public function directIncome()
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

        $spid = DB::table('users')-> where('email', session('email'))->get();
        $datas= $spid;
        // return $datas;
        
        $decode=json_decode($datas);

        foreach($decode as $res)

        // $users = User::where('sponserid', $res->referralkey)->paginate(5);
        
            
            $lincome = DirectIncome::where('userref', $res->referralkey)->paginate(5);

            return view('directincome', ['incomeRes' => $lincome]);
        }

    return redirect("/")->withSuccess('Login details are not valid');

    }

    

    
}
