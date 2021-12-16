<?php

namespace App\Http\Controllers;
use App\Models\Epinrequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EpinController extends Controller
{
    public function index(){
    
      if(Auth::check()){
    $lincome = Epinrequest::where('userid', session('email'))->paginate(8);

    return view('epinOrder', ['empinList' => $lincome]);
  }

  return redirect("/")->withSuccess('Login details are not valid');
    }

    public function requestEpin(Request $request)
    {           
      if(Auth::check()){
        $data = $request->all();
        
        // echo $data['level'].$data['commision'];die;
    
        $check = $this->createlevel($data);
         
        return redirect("epinOrder")->withSuccess('Record Added');
      }

      return redirect("/")->withSuccess('Login details are not valid');
    }


    public function createlevel(array $data)
    {
      if(Auth::check()){
      return Epinrequest::create([
        'userid' => $data['userid'],
        'amount' => $data['amount'],
        'status' => $data['status']
      ]);
    }

    return redirect("/")->withSuccess('Login details are not valid');
    }

  

    
}
