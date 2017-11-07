<li id="postItem{{$id}}">
    <span class="prefix prefixItem{{$id}}"></span>
    <a class="subject" href="/post/id/{{$id}}/{{$slug}}" data-post_id="{{$id}}" data-thread_id="{{$thread_id}}">{{$subject}}</a> - <span class="username">{{$userName}}</span>, <span class="createdDate">{{$createdDateTime}}</span>
    @if(count($children)>0)
        <ul>
            @foreach($children as $child)
                {!! $child !!}
            @endforeach
        </ul>
    @endif
</li>