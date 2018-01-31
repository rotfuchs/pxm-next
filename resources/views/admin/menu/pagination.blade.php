<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item {{$previewButtonClass}}">
            <a class="page-link" href="{!! $previewButtonUrl !!}" tabindex="-1">Zur&uuml;ck</a>
        </li>
        @foreach($pageLinks as $link)
            <li class="page-item {{$link['buttonClass']}}"><a class="page-link" href="{!! $link['url'] !!}">{{$link['number']}}</a></li>
        @endforeach
        <li class="page-item {{$nextButtonClass}}">
            <a class="page-link" href="{!! $nextButtonUrl !!}">Weiter</a>
        </li>
    </ul>
</nav>