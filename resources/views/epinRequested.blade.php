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
                                    <th>Option</th>
                                </tr>
                                @foreach ($empinList as $i => $pinres)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$pinres->userid}}</td>
                                    <td>{{$pinres->amount}} </td>
                                    <td>{{$pinres->status}} </td>
                                    <td>{{ date('d-m-y', strtotime($pinres->created_at)) }}</td>
                                    <td>
                                        @if ($pinres->status=='Close')
                                        Expired
                                        @else
                                            
                                        <form action="{{ route('sendEpinsend') }}" method="POST">
                                            @csrf  
                                            <input type="hidden" name="user_id" value="{{$pinres->userid}}">
                                            <input type="hidden" name="status" value="Open">
                                            <input type="text" name="pinqty" value="" placeholder="PinQty" style="width: 70px">
                                            <input type="submit" name="send" value="Send">
                                        </form>
                                    @endif
                                    </td>
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