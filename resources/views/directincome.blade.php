@extends('layoutes.dashboard')
@section('title')
    Income List
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Direct Income List</h4>
                        {{--  <p class="category">Last Campaign Performance</p>  --}}
                    </div>
                    <div class="content">
                            <div class="table-responsive">
                                <table border="1" bordercolor="#ccc" class="table table-striped">
                                <tr class="">
                                    <th>#</th>
                                    <th>UserId</th>
                                    <th>Income</th>
                                    {{--  <th>CreatedAt</th>  --}}
                                    <th>UpdatedAt</th>
                                    {{--  <th>Option</th>  --}}
                                </tr>
                                @foreach ($incomeRes as $i => $result)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$result->userref}}</td>
                                    {{--  <td><i class="fa fa-rupee"></i> {{$result->amount}}</td>  --}}
                                    <td style="color: green"><b><i class="fa fa-rupee"></i> {{$result->amount}}</b></td>
                                    {{--  <td>{{$result->created_at}}</td>  --}}
                                    <td>{{$result->updated_at}}</td>
                                    {{--  <td><a href="{{'income'}}">Update</a></td>  --}}
                                </tr>
                                @endforeach
                                </table>
                            </div>
                            <div>{{$incomeRes->links()}}</div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">2021 Report</h4>
                        <p class="category">All products including Taxes</p>
                    </div>
                    <div class="content">
                        <div id="chartActivity" class="ct-chart"></div>

                        <div class="footer">
                            <div class="chart-legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Bounce
                                <i class="fa fa-circle text-warning"></i> Unsubscribe
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="ti-check"></i> Data information certified
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection