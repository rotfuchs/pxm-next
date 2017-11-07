<tr>
    <td class="topic">
        <a
                class="{{implode(' ', $threadClasses)}}"
                href="/board/id/{{$board_id}}/thread/{{$thread_id}}/post/{{$post_id}}/{{$slug}}"
                data-post_id="{{$post_id}}"
                data-thread_id="{{$thread_id}}"
                title="{{$topic}}"
        >{{$topic}}
        </a>
    </td>
    <td class="author">{!! $author !!}</td>
    <td class="createdDate">{{$createdDateTime}}</td>
    <td class="viewCount">{{$viewCount}}</td>
    <td class="replyCount"><a href="/thread/{{$thread_id}}/{{$slug}}" data-post_id="{{$post_id}}" data-thread_id="{{$thread_id}}">{{$replyCount}}</a></td>
    <td class="lastMsg"><a class="{{implode(' ', $lastMsgClasses)}}" href="/post/id/{{$lastMsgId}}/{{$lastMsgSlug}}" data-post_id="{{$lastMsgId}}" data-thread_id="{{$thread_id}}">{{$lastMsgDateTime}}</a></td>
</tr>