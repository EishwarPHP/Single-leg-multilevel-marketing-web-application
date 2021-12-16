{{--  <li>{{ $sub_items->name }}</li>  --}}
<li style="background:#eee;padding:5px 10px;border:1px solid #fff;">
    <a href="{{'treeview'}}/{{$sub_items->referralkey}}">{{ $sub_items->name }} </a> | {{ $sub_items->referralkey }}</li>
@if ($sub_items->itemsFuction)
    <ul>
        @if(count($sub_items->itemsFuction) > 0)
            @foreach ($sub_items->itemsFuction as $childItems)
                @include('sub_items', ['sub_items' => $childItems])
            @endforeach
        @endif
    </ul>
@endif