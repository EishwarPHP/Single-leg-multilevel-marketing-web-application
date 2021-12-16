@extends('layoutes.dashboard')
@section('title')
    User Page
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">All Users List </h4>
                        <p class="category">All Register Users List Showing here</p>
                    </div>
                    <div class="content">
                        <table border="1" bordercolor="#ccc" class="table table-striped">
                                <tr class="">
                                    <th>#</th>
                                    <th>FullName</th>
                                    <th>Mobile</th>
                                    <th>EmailID</th>
                                    <th>E-Pin</th>
                                    <th>ReferralKey</th>
                                    <th>SponserID</th>
                                    {{--  <th>Option</th>  --}}
                                </tr>
                                @foreach ($treeviewList as $i => $tuser)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td><a href="../{{'treeview'}}/{{$tuser->referralkey}}">{{$tuser->name}}</a></td>
                                    <td>{{$tuser->mobile}}</td>
                                    <td>{{$tuser->email}}</td>
                                    <td>{{$tuser->epin}}</td>
                                    <td>{{$tuser->referralkey}}</td>
                                    <td>{{$tuser->sponserid}}</td>
                                    {{--  <td><a href="#">View</a></td>  --}}
                                </tr>
                                @endforeach
                        </table>
                        <div>{{$treeviewList->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection