
<ul>
    @if(count($itemsres) > 0)
        @foreach ($itemsres as $item)
            <li>{{ $item->name }}</li>
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