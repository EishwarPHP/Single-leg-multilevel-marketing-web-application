<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Epin;
use App\Models\Epinrequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EpinRequestedController extends Controller
{
    public function epinRequested()
    {    
        if(Auth::check()){
          
        //$epin = DB::table('epins')->where('user_id', session('email'))->paginate(5); //this code is also currect
        $epin = Epin::where('user_id', session('email'))->where('status', 'Open')->paginate(8);

        return view('myepin', ['allepinList' => $epin]);
    }

    return redirect("/")->withSuccess('Login details are not valid');
    }

    public function forAllusersRequest(){
    
        if(Auth::check()){
        $lincome = Epinrequest::paginate(8);
    
        return view('epinRequested', ['empinList' => $lincome]);
        }

        return redirect("/")->withSuccess('Login details are not valid');
    }

        public function sendEpin(Request $request)
        {  
            if(Auth::check()){
            // $pin= rand(0000000000,9999999999);
           // $data=$request->$pin;
           $user_id=$request->input('user_id');
           $status=$request->input('status');
           $pinqty=$request->input('pinqty');
        //    echo $pinqty;die;
   
           $i=1;
               while($i< $pinqty){
                  Epin::create([
                       'user_id' => $user_id,
                       'pin' => rand(0000000000,9999999999),
                       'status' => $status
                     ]);
                    $i++;
               }
            //    return redirect('epinRequested');
               
               DB::update('update epinrequests set status = ? where userid = ?',['Close',$user_id]);
   
               return redirect('epinRequested')->withSuccess('Registration Success!');
            }

            return redirect("/")->withSuccess('Login details are not valid');
        }
     
}
