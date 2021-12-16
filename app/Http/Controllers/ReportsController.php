<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportsController extends Controller
{
    // public function reportsPage() {
    //     return view('reports');
    // }

    
    public function reportsList(Request $request) 
  { 
    if(Auth::check()){
      
      $comino = DB::table('incomes')->sum('day_bal'); 
      $from=$request->input('datepicker_from');
    if($from==''){
      $userList = User::join('incomes', 'users.referralkey', '=', 'incomes.userid')
                ->get(['users.*', 'incomes.*']);
      // $userList = DB::table('users')->paginate(5); 
      return view('reports', ['userList' => $userList, 'comino'=>$comino]); 
    }else{

    $dateS = new Carbon($request->input('datepicker_from'));
    $dateE = new Carbon($request->input('datepicker_to'));
    // $dateS=$request->input('datepicker_from');
    // $dateE=$request->input('datepicker_to');
    // return $dateE;
  // $userList = DB::table('users')
  // ->where('created_at','>=', Carbon::parse($request->input('datepicker_from'))->format('Y-m-d'))
  // ->orWhere('created_at','<=', Carbon::parse($request->input('datepicker_to'))->format('Y-m-d')) 
  // ->paginate(5); 

  $userList = User::join('incomes', 'users.referralkey', '=', 'incomes.userid')
  ->whereBetween('incomes.created_at', [$dateS
  ->format('Y-m-d')." 00:00:00", $dateE
  ->format('Y-m-d')." 23:59:59"])
  ->get(['users.*', 'incomes.day_bal']);
  // return $userList;
  return view('reports', ['userList' => $userList, 'comino'=>$comino]); 
    }
  }
  
  return redirect("/")->withSuccess('You are not allowed to access');
  }

  // -------------------------------------directout-------------------------------------------------

  public function directOutcome(Request $request) 
  { 
    if(Auth::check()){
      $comino = DB::table('direct_incomes')->sum('amount'); 
      $from=$request->input('datepicker_from');

    if($from==''){
      $outcomes = User::join('direct_incomes', 'users.referralkey', '=', 'direct_incomes.userref')
                ->get(['users.*', 'direct_incomes.amount']);
      // $userList = DB::table('users')->paginate(5); 
      return view('directoutcome', ['outcomeList' => $outcomes, 'comino'=>$comino]); 
    }else{

    $dateS = new Carbon($request->input('datepicker_from'));
    $dateE = new Carbon($request->input('datepicker_to'));
    // $dateS=$request->input('datepicker_from');
    // $dateE=$request->input('datepicker_to');
    // return $dateE;
  // $userList = DB::table('users')
  // ->where('created_at','>=', Carbon::parse($request->input('datepicker_from'))->format('Y-m-d'))
  // ->orWhere('created_at','<=', Carbon::parse($request->input('datepicker_to'))->format('Y-m-d')) 
  // ->paginate(5); 

  $outcomes = User::join('direct_incomes', 'users.referralkey', '=', 'direct_incomes.userref')
  ->whereBetween('direct_incomes.created_at', [$dateS
  ->format('Y-m-d')." 00:00:00", $dateE
  ->format('Y-m-d')." 23:59:59"])
  ->get(['users.*', 'direct_incomes.amount']);
  // return $userList;
  return view('directoutcome', ['outcomeList' => $outcomes, 'comino'=>$comino]); 
    }
  }
  
  return redirect("/")->withSuccess('You are not allowed to access');
  }

  public function comincomes(Request $request) 
  { 
    if(Auth::check()){
      $comino = DB::table('users')->sum('amount'); 
      $distr=$comino*30/100;
      $tcomin=$comino-$distr;
      $from=$request->input('datepicker_from');

    if($from==''){
      // $comin = User::join('direct_incomes', 'users.referralkey', '=', 'direct_incomes.userref')
      //           ->get(['users.*', 'direct_incomes.amount']);
      
      // return $comino;
      $comin = DB::table('users')->get(); 
      return view('comincome', ['comincomeList' => $comin, 'comino'=>$tcomin]); 
    }else{

    $dateS = new Carbon($request->input('datepicker_from'));
    $dateE = new Carbon($request->input('datepicker_to'));
    // $dateS=$request->input('datepicker_from');
    // $dateE=$request->input('datepicker_to');
    // return $dateE;
  // $userList = DB::table('users')
  // ->where('created_at','>=', Carbon::parse($request->input('datepicker_from'))->format('Y-m-d'))
  // ->orWhere('created_at','<=', Carbon::parse($request->input('datepicker_to'))->format('Y-m-d')) 
  // ->paginate(5); 

  $comin = User::whereBetween('created_at', [$dateS
  ->format('Y-m-d')." 00:00:00", $dateE
  ->format('Y-m-d')." 23:59:59"])
  ->get();
  // return $userList;
  return view('comincome', ['comincomeList' => $comin, 'comino'=>$tcomin]); 
    }
  }
  
  return redirect("/")->withSuccess('You are not allowed to access');
  }

  // public function countTotalinamount()
  // {
  //   if(Auth::check()){
  //     // $comin = DB::table('users')->where('status', 'paid')->sum('amount'); 
  //   $comin = DB::table('users')->sum('amount'); 
  //     return view('comincome', ['totalinco' => $comin]); 

  //   }
  //   return redirect("/")->withSuccess('You are not allowed to access');
  // }
}
