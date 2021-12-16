<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function myProfile() {

        if(Auth::check()){
            // return view('profile');
            $query = DB::table('users')->where('email', session('email'))->get();

        return view('profile', ['myprofiles' => $query]);
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function updateMyprofile(Request $request)
        {
            if(Auth::check()){
            // $pin= rand(0000000000,9999999999);
           // $data=$request->$pin;
           $name=$request->input('name');
           $mobile=$request->input('mobile');
           $password=$request->input('password');
           $pass=Hash::make($password);
            //    Hash::make($data['password'])
            //    echo $pinqty;die;

            //    DB::update('update users set name = ?, mobile = ?, password = ?  where email = ?', [$name,$mobile,$pass,session('email')]);
               DB::table('users')
              ->where('email', session('email'))
              ->update(['name' => $name,'mobile' => $mobile,'password' => $pass]);

              Session::flush();
              Auth::logout();

              return Redirect('/');
            }

            return redirect("/")->withSuccess('Login details are not valid');
        }
}
