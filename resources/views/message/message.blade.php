<div class="message" data-post_id="{{$post_id}}">
    <div class="defaultHeader">
        <div class="topic">Thema: <span>{{$subject}}</span></div>
        <div class="created">Datum: <span><a href="/post/id/{{$post_id}}/{{$slug}}">{{$createdDateTime}} Uhr</a></span></div>
    </div>
    @if($isReply)
    <div class="replyInfo">
        Antwort auf: <a href="" data-id="{{$replyMessageId}}">{{$replySubject}}</a> von <span>{{$replyUserName}}</span>
    </div>
    @endif
    <div class="content">
        <div class="userInfo">
            <div class="userName"><a href="">{{$userName}}</a></div>
        </div>
        <div class="messageBody">{!! $content !!}</div>
    </div>
    <div class="messageFoot">
        <a href="">Auf diesen Beitrag antworten</a>
    </div>








</div>
