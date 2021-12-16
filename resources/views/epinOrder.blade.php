@extends('layoutes.dashboard')
@section('title')
    Level Setting
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                     {{--  <a class="nav-link" href="{{ 'users' }}"><button>Add User</button></a>  --}}
                        <h4 class="title">Request E-Pin</h4>
                        {{--  <p class="category">Enter level you want to create</p>  --}}
                    </div>
                    <div class="content">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card table-responsive">
                                <form action="{{route('requestEpin')}}" method="POST">
                                @csrf  
                                    <div class="col-lg-12 col-sm-12">
                                        <label>Enter Amount</label><br>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <input type="hidden" name="userid" id="userid" class="btn btn-warning" value="{{session('email')}}">
                                        <input type="text" name="amount" id="amount" class="btn btn-warning" placeholder="Enter Amount">
                                        <input type="hidden" name="status" id="status" class="btn btn-warning" value="Open">
                                        <input type="submit" value="Request E-Pin" class="btn btn-warning" >
                                    </div>      
                                    
                                </form>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="chart-legend">
                                {{--  <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Click
                                <i class="fa fa-circle text-warning"></i> Click Second Time  --}}
                            </div>
                            <hr>
                            <div class="stats">
                                //
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Requested Status for E-pin</h4>
                        {{--  <p class="category">Last Campaign Performance</p>  --}}
                    </div>
                    <div class="content">
                            <div class="card table-responsive">
                                <table border="1" bordercolor="#ccc" class="table table-striped">
                                <tr class="">
                                    <th>#</th>
                                    <th>UserId</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                @foreach ($empinList as $i => $pinres)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$pinres->userid}}</td>
                                    <td>{{$pinres->amount}} </td>
                                    <td>{{$pinres->status}} </td>
                                    <td>{{ date('d-m-y', strtotime($pinres->created_at)) }}</td>
                                </tr>
                                @endforeach
                                </table>
                            </div>
                            <div>{{$empinList->links()}}</div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">All Active E-Pin List</h4>
                        <p class="category">All Epin List Showing Here</p>
                    </div>
                    <div class="content">
                        
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection