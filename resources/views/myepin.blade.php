@extends('layoutes.dashboard')
@section('title')
    Level Setting
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">My E-Pin</h4>
                        <p class="category"><small>All Epin List Showing Here</small></p>
                    </div>
                    <div class="content">
                        <div class="card table-responsive">
                            <table border="1" bordercolor="#ccc" class="table table-striped">
                            <tr class="">
                                <th>#</th>
                                <th>UserId</th>
                                <th>E-Pin</th>
                                <th>Status</th>
                            </tr>
                            @foreach ($allepinList as $i => $pinlist)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$pinlist->user_id}}</td>
                                <td>{{$pinlist->pin}} </td>
                                <td>{{$pinlist->status}} </td>
                            </tr>
                            @endforeach
                            </table>
                        </div>
                        <div>{{$allepinList->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection