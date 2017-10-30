<tr>
    <td class="topic"><a class="{{$threadClass}}" href="/board/id/{{$board_id}}/thread/{{$thread_id}}/post/{{$post_id}}" data-post_id="{{$post_id}}" data-thread_id="{{$thread_id}}">{{$topic}}</a></td>
    <td class="author">{!! $author !!}</td>
    <td class="createdDate">{{$createdDateTime}}</td>
    <td class="viewCount">{{$viewCount}}</td>
    <td class="replyCount"><a href="/thread/{{$thread_id}}">{{$replyCount}}</a></td>
    <td class="lastMsg"><a href="">{{$lastMsgDateTime}}</a></td>
</tr>