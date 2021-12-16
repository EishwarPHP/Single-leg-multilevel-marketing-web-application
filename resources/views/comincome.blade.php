@extends('layoutes.dashboard')
@section('title')
    Report
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Direct Outcome Reports</h4>
                        <p class="category">Outgoing Level Direct Outcome Report</p>
                    </div>
                    <div class="content">
                        <form action="{{ route('icome') }}" method="POST">
                            {{method_field('post')}}
                            @csrf
                            
                            <input type="date" name="datepicker_from" >
                            <input type="date" name="datepicker_to" >
                            <input type="submit" name="submit" value="Search">
                        </form>
                    </div>
                </div>
            </div>
           
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">All Result </h4>
                        <p class="category">All Users List who have my Downline</p>
                    </div>
                    <div class="content">
                        <table border="1" bordercolor="#ccc" class="table table-striped">
                                <tr class="">
                                    <th>#</th>
                                    <th>FullName</th>
                                    <th>ReferralKey</th>
                                    <th>Amount</th>
                                    <th>CreatedAt</th>
                                    {{--  <th>Option</th>  --}}
                                </tr>
                                
                                @foreach ($comincomeList as $i => $user)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td><a href="{{'treeview'}}/{{$user->referralkey}}">{{$user->name}}</a></td>
                                    <td>{{$user->referralkey}}</td>
                                    {{--  <td><i class="fa fa-rupee"></i> {{$user->amount}}</td>  --}}
                                    <td style="color: green"><b><i class="fa fa-rupee"></i> {{$user->amount}}</b></td>
                                    <td>{{$user->created_at}}</td>
                                    {{--  <td><a href="#">View</a></td>  --}}
                                </tr>
                                @endforeach
                                <tr><th colspan="3">SubTotal</th><th><i class="fa fa-rupee"></i> {{$comino}} <br><small>After 30% Distribution</small></th></tr>
                        </table>
                        {{--  <div>{{ if((!empty($userList)) $userList->links() }}</div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


