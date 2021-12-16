@extends('layoutes.dashboard')
@section('title')
    User Page
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">My Downline </h4>
                        <p class="category">All Users List who have my Downline</p>
                    </div>
                    <div class="content">
                        {{--  <table border="1" bordercolor="#ccc" class="table table-striped">
                                <tr class="">
                                    <th>#</th>
                                    <th>FullName</th>
                                    <th>Mobile</th>
                                    <th>EmailID</th>
                                    <th>ReferralKey</th>
                                    <th>SponserID</th>
                                    <th>Option</th>
                                </tr>
                                @foreach ($usersList as $i => $user)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td><a href="{{'treeview'}}/{{$user->referralkey}}">{{$user->name}}</a></td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->referralkey}}</td>
                                    <td>{{$user->sponserid}}</td>
                                    <td><a href="#">View</a></td>
                                </tr>
                                @endforeach
                        </table>
                        <div>{{$usersList->links()}}</div>  --}}
                        <ul>
                            @if(count($itemsres) > 0)
                                @foreach ($itemsres as $i=> $item)
                                    <li style="background:#ddd;padding:5px 10px;border:1px solid #fff;"><a href="{{'treeview'}}/{{$item->referralkey}}">{{ $item->name }} </a>| {{ $item->referralkey }}</li>
                                    <ul>
                                        @if(count($item->childItems))
                                            @foreach ($item->childItems as $childItems)
                                                @include('sub_items', ['sub_items' => $childItems]) 
                                            @endforeach
                                        @endif
                                    </ul>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">User Registration</h4>
                        <p class="category">You Can Add in Your downline From here</p>
                    </div>
                    <div class="content">
                        
                         <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" placeholder="referralkey" id="referralkey" class="form-control" name="referralkey"
                                    value="{{rand(000000,999999)}}">
                                <input type="text" placeholder="Sponserid" id="sponserid" class="form-control" name="sponserid"
                                    required autofocus>
                                @if ($errors->has('sponserID'))
                                <span class="text-danger">{{ $errors->first('sponserid') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Mobile Number" id="mobile" class="form-control" name="mobile"
                                    required autofocus>
                                @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Enter Amount" id="amount" class="form-control" name="amount"
                                    required autofocus>
                                @if ($errors->has('amount'))
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Enter Epin" id="epin" class="form-control" name="epin"
                                    required autofocus>
                                @if ($errors->has('amount'))
                                <span class="text-danger">{{ $errors->first('epin') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Add User</button>
                            </div>
                            <br>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection