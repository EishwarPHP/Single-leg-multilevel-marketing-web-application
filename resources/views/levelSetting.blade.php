@extends('layoutes.dashboard')
@section('title')
    Level Setting
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Add Level Commision</h4>
                        {{-- <p class="category">All products including Taxes</p> --}}
                    </div>
                    <div class="content">
                        <div class="card table-responsive">
                            <form action="{{route('levelSettingo')}}" method="POST">
                            @csrf  
                                <div class="col-lg-12 col-sm-12">
                                    <label>Level</label><label style="margin-left:200px;">BONUS SETTINGS (in %)</label><br>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    {{--  <label>Level 1</label>  --}}
                                    <input type="text" name="level" id="level" class="btn btn-success" value="Level ">
                                    <input type="text" name="commision" id="commision" class="btn btn-success">
                                    <input type="submit" value="Create Level" class="btn btn-success" >
                                </div>                                  
                                
                                
                            </form>
                        </div>

                        <div class="footer">
                            <div class="chart-legend">
                                {{-- <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Bounce
                                <i class="fa fa-circle text-warning"></i> Unsubscribe --}}
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="ti-check"></i> .
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Levels List</h4>
                        {{--  <p class="category">Last Campaign Performance</p>  --}}
                    </div>
                    <div class="content">
                        {{-- <div id="chartPreferences" class="ct-chart ct-perfect-fourth"> --}}
                            <div class="card table-responsive">
                                <table border="1" bordercolor="#ccc" class="table table-striped">
                                <tr class="">
                                    <th>#</th>
                                    <th>Level</th>
                                    <th>Commision</th>
                                    <th>CreatedAt</th>
                                    <th>UpdatedAt</th>
                                    <th>Option</th>
                                </tr>
                                @foreach ($levelsList as $i => $levels)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$levels->level}}</td>
                                    <td>{{$levels->commision}} %</td>
                                    <td>{{$levels->created_at}}</td>
                                    <td>{{$levels->updated_at}}</td>
                                    <td><a href="{{'levelSetting'}}">Update</a></td>
                                </tr>
                                @endforeach
                                </table>
                            </div>
                        </div>

                        {{-- <div class="footer">
                            <div class="chart-legend">
                                 <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Bounce
                                <i class="fa fa-circle text-warning"></i> Unsubscribe 
                            </div>
                            <hr>
                            <div class="stats">
                                .
                            </div>
                        </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection