<li>
    <a class="subject" href="/post/id/{{$id}}">{{$subject}}</a> - <span class="username">{{$userName}}</span>, <span class="createdDate">{{$createdDateTime}}</span>
    @if(count($children)>0)
        <ul>
            @foreach($children as $child)
                {!! $child !!}
            @endforeach
        </ul>
    @endif
</li>