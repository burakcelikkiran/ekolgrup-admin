@foreach($menu as $item)
    <li class="@if( count( $item['children'] ) > 0 ) dropdown @endif" id="{{$item['value']}}">
        <a href="/{{$item['value']}}">
            {{$item['name']}}
        </a>
        @if( count( $item['children'] ) > 0 )
            <ul style="min-width: 235px;">
                @include('components.submenu', ['menu' => $item['children'], 'submenu' => true, 'onek' => $item['value']])
            </ul>
        @endif
    </li>
@endforeach
