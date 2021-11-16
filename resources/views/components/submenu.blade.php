@foreach($menu as $item)
    <li>
        <a href="/{{$onek}}/{{$item['value']}}">
            {{$item['name']}}
        </a>
    </li>
@endforeach
