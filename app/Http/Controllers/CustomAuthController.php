<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Levelsetting;
use App\Models\Income;
use App\Models\DirectIncome;
use App\Models\Epin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $request->session()->put($credentials);
        // echo session('email').session('password');die;
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index')
                        ->withSuccess('Signed in');
        }

        return redirect("/")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'referralkey' => 'required',
            'sponserid' => 'required',
            'mobile' => 'required|digits:10',
            'amount' => 'required|min:3',
            'epin' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
        ]);

        $data = $request->all();
        // return $data['epin'];
        // return Epin::where('pin', $data['epin']);
        $spid = DB::table('epins')-> where('pin', $data['epin'])->get();
        $datas= $spid;
            // return $datas;

        $decode=json_decode($datas);

        foreach($decode as $res)

        if($res->pin>0){
            // return "This is Okh";

        $abc= DB::table('users')-> where('referralkey', $data['sponserid'])->get();

        $userids=json_decode($abc);

        foreach($userids as $ures)
        // return $ures->id;

        // return $data['sponserid'];
// Level 1 Income Entry From here
            Income::create([
                'userid' => $data['sponserid'],
                'day_bal' => ($data['amount']*7)/100,
                'levels' => 'Level 1',
            ]);
// Level 2 Income Entry From here
        $checklevel1= DB::table('users')-> where('referralkey', $data['sponserid'])->get();
        $level1Dec1=json_decode($checklevel1);
            foreach($level1Dec1 as $levelcount1)


        if($levelcount1->sponserid!=''){
            // return $levelcount1->sponserid;

            Income::create([
                'userid' => $levelcount1->sponserid,
                'day_bal' => ($data['amount']*3)/100,
                'levels' => 'Level 2',
            ]);
// Level 3 Income Entry From here
            $checklevel2= DB::table('users')-> where('referralkey', $levelcount1->sponserid)->get();
            $level1Dec2=json_decode($checklevel2);
                foreach($level1Dec2 as $levelcount2)


            if($levelcount2->sponserid!=''){
                // return $levelcount2->sponserid;
                Income::create([
                    'userid' => $levelcount2->sponserid,
                    'day_bal' => ($data['amount']*2)/100,
                    'levels' => 'Level 3',
                ]);

// Level 4 Income Entry From here
                    $checklevel3= DB::table('users')-> where('referralkey', $levelcount2->sponserid)->get();
                    $level1Dec3=json_decode($checklevel3);
                        foreach($level1Dec3 as $levelcount3)


                    if($levelcount3->sponserid!=''){
                        // return $levelcount3->sponserid;

                        Income::create([
                            'userid' => $levelcount3->sponserid,
                            'day_bal' => ($data['amount']*1)/100,
                            'levels' => 'Level 4',
                        ]);


// Level 5 Income Entry From here
                        $checklevel4= DB::table('users')-> where('referralkey', $levelcount3->sponserid)->get();
                        // return $checklevel4;
                        $level1Dec4=json_decode($checklevel4);
                            foreach($level1Dec4 as $levelcount4)


                        if($levelcount4->sponserid!=''){
                            // return $levelcount4->sponserid;
                            Income::create([
                                'userid' => $levelcount4->sponserid,
                                'day_bal' => ($data['amount']*0.75)/100,
                                'levels' => 'Level 5',
                            ]);


// Level 6 Income Entry From here
                            $checklevel5= DB::table('users')-> where('referralkey', $levelcount4->sponserid)->get();
                            // return $checklevel5;

                            $level1Dec5=json_decode($checklevel5);
                                foreach($level1Dec5 as $levelcount5)

                            if($levelcount5->sponserid!=''){
                                // return $levelcount5->sponserid;
                                Income::create([
                                    'userid' => $levelcount5->sponserid,
                                    'day_bal' => ($data['amount']*0.50)/100,
                                    'levels' => 'Level 6',
                                ]);


// Level 7 Income Entry From here
                                $checklevel6= DB::table('users')-> where('referralkey', $levelcount5->sponserid)->get();
                                $level1Dec6=json_decode($checklevel6);
                                    foreach($level1Dec6 as $levelcount6)


                                if($levelcount6->sponserid!=''){
                                    // return $levelcount6->sponserid;
                                    Income::create([
                                        'userid' => $levelcount6->sponserid,
                                        'day_bal' => ($data['amount']*0.25)/100,
                                        'levels' => 'Level 7',
                                    ]);

                                }
                            }
                        }
                    }
            }

        }


        // if($level==0)
        // {
        //     Income::create([
        //         'userid' => $data['sponserid'],
        //         'day_bal' => ($data['amount']*7)/100
        //     ]);
        // }
        // if($level==1)
        // {
        //     Income::create([
        //         'userid' => $data['sponserid'],
        //         'day_bal' => ($data['amount']*3)/100
        //     ]);
        // }

        // if($level==2)
        // {
        //     Income::create([
        //         'userid' => $data['sponserid'],
        //         'day_bal' => ($data['amount']*2)/100
        //     ]);
        // }
        // if($level==3)
        // {
        //     Income::create([
        //         'userid' => $data['sponserid'],
        //         'day_bal' => ($data['amount']*1)/100
        //     ]);
        // }
        // if($level==4)
        // {
        //     Income::create([
        //         'userid' => $data['sponserid'],
        //         'day_bal' => ($data['amount']*0.75)/100
        //     ]);
        // }
        // if($level==5)
        // {
        //     Income::create([
        //         'userid' => $data['sponserid'],
        //         'day_bal' => ($data['amount']*0.50)/100
        //     ]);
        // }
        // if($level==6)
        // {
        //     Income::create([
        //         'userid' => $data['sponserid'],
        //         'day_bal' => ($data['amount']*0.25)/100
        //     ]);
        // }

        $check = $this->create($data, $ures);
        // return $check;
            DirectIncome::create([
                'userref' => $data['referralkey'],
                'amount' => ($data['amount']*30)/100
            ]);
            // DB::table('epins')-> where('pin', $data['epin'])->get();
            DB::update('update epins set status = ? where pin = ?',['Close',$res->pin]);

        }

            return redirect("index")->withSuccess('User Added Successfully Thanks');
    }

    // public function falledmsg(){
    //     return "E-Pin Expired";
    // }
    // public function successmsg(){
    //     return "Thanks you for being a part of Our Bussiness";
    // }


    public function create(array $data, $ures)
    {
        // $spid = DB::table('users')-> where('email', session('email'))->get();
        // $datas= $spid;
        // // return $datas;

        // $decode=json_decode($datas);

        // foreach($decode as $res)

      return User::create([
        'name' => $data['name'],
        'forenid' => $ures->id,
        'referralkey' => $data['referralkey'],
        'sponserid' => $data['sponserid'],
        'mobile' => $data['mobile'],
        'amount' => $data['amount'],
        'epin' => $data['epin'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);


    }

    // public function amountDstribute(){

    //     $users = DB::table('users')-> where('sponserid', '010102')->get()->toArray();

    // }


    public function dashboard()
    {
        if(Auth::check()){
            return view('index');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }


    public function levelSettingo(Request $request)
    {
        if(Auth::check()){
        $data = $request->all();

        // echo $data['level'].$data['commision'];die;

        $check = $this->createlevel($data);

        return redirect("levelSetting")->withSuccess('Record Added');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }


    public function createlevel(array $data)
    {
        if(Auth::check()){
            return levelSetting::create([
                'level' => $data['level'],
                'commision' => $data['commision']
            ]);
        }

        return redirect("/")->withSuccess('You are not allowed to access');

    }
    public function levelSetting()
    {
        if(Auth::check()){

        return view('levelSetting');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function LevelList() {
        if(Auth::check()){
        return view('levelSetting');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function levelindex()
    {
        if(Auth::check()){
        $levels = DB::table('levelsettings')->get();

        return view('levelSetting', ['levelsList' => $levels]);
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    // AddUsers Query

    public function totalMembers()
    {
        if(Auth::check()){
            $count = DB::table('users')->count();
            $inco = DB::table('incomes')->sum('day_bal');
            return view('index',['tusers'=>$count, 'tinco'=>$inco]);
        }

        return redirect("/")->withSuccess('You are not allowed to access');


    }

    // public function TotalCommission()
    // {

    //     $inco = DB::table('incomes')->count();
    //     return view('index',['tinco'=>$inco]);
    // }
}
