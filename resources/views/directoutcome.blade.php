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
                        <form action="{{ route('directoutcome') }}" method="POST">
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
                                
                                @foreach ($outcomeList as $i => $ouser)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td><a href="{{'treeview'}}/{{$ouser->referralkey}}">{{$ouser->name}}</a></td>
                                    <td>{{$ouser->referralkey}}</td>
                                    {{--  <td><i class="fa fa-rupee"></i> {{$ouser->amount}}</td>  --}}
                                    <td style="color: green"><b><i class="fa fa-rupee"></i> {{$ouser->amount}}</b></td>
                                    <td>{{$ouser->created_at}}</td>
                                    {{--  <td><a href="#">View</a></td>  --}}
                                </tr>
                                @endforeach
                                <tr><th colspan="3">SubTotal</th><th><i class="fa fa-rupee"></i> {{$comino}}</th></tr>
                        </table>
                        {{--  <div>{{ if((!empty($userList)) $userList->links() }}</div>  --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


