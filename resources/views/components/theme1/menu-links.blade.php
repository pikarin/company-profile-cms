<ul class="{{ $wrapperClass }}">
    @foreach ($getLinks() as $name => $link)
        <li class="{{ $itemClass }}">
            <a href="{{ $link }}">{{ $name }}</a>
        </li>
    @endforeach
</ul>
