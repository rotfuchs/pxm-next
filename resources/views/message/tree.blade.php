<div class="messageTree">
    <div class="defaultHeader">
        Antwort auf "<a href="/post/id/{{$post_id}}">{{$subject}}</a>" von {{$userName}}
    </div>
    <div class="treeContainer">
        <ul class="tree">
            @foreach($children as $child)
                <?php /** @var \App\Services\Message\View\MessageTreeItemView $child */ ?>
                {!! $child !!}
            @endforeach
        </ul>
    </div>
</div>