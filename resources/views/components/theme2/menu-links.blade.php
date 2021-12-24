<ul {{ $attributes }}>
    @foreach ($getLinks() as $name => $link)
        <li>
            <a class="{{ $itemClass.' '.$itemActiveClass }}" href="{{ $link }}">{{ $name }}</a>
        </li>
    @endforeach
</ul>
