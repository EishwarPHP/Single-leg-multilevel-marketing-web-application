@extends('layoutes.dashboard')
@section('title')
    Level Setting
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            @foreach ($myprofiles as $mypro)
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">My Profile</h4>
                        {{--  <p class="category">Last Campaign Performance</p>  --}}
                    </div>
                    <div class="content">
                            <div class="card table-responsive">
                                <table border="1" bordercolor="#ccc" class="table table-striped">
                                
                                    <tr><th>Name</th><td>{{$mypro->name}} </td></tr>
                                    <tr><th>Referralkey</th><td>{{$mypro->referralkey}}</td></tr>
                                    <tr><th>Email</th><td>{{$mypro->email}}</td></tr>
                                    <tr><th>Mobile</th><td>{{$mypro->mobile}} </td></tr>
                                    <tr><th>Sponser Id</th><td>{{$mypro->sponserid}} </td></tr>
                                    <tr><th>Password</th><td>{{session('password')}} </td></tr>
                                    <tr><th>E-Pin</th><td>{{$mypro->epin}} </td></tr>
                                               
                                </table>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Profile Updation</h4>
                        {{-- <p class="category">All Epin List Showing Here</p> --}}
                    </div>
                    <div class="content">
                        <form action="{{ route('updateMyprofile') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Name</label>
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{$mypro->name}}"
                                    required autofocus >
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label>Mobile Number</label>
                                <input type="text" placeholder="Mobile Number" id="mobile" class="form-control" name="mobile" value="{{$mypro->mobile}}"
                                    required autofocus>
                                @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="text" placeholder="Password" id="password" class="form-control"
                                    name="password" value="{{session('password')}}" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Update Now</button>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection