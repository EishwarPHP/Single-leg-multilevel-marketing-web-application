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
                        <ul>
                            @if(count($itemsres) > 0)
                                @foreach ($itemsres as $i=> $item)
                                    <li style="background:#ddd;padding:5px 10px;border:1px solid #fff;"><a href="{{'treeview'}}/{{$item->referralkey}}">{{ $item->name }}</a> | {{ $item->referralkey }}</li>
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
        </div>
    </div>

@endsection