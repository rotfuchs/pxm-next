<div class="category">
    <div class="headline2">{{$headline}}</div>

    <div class="topics">
        @foreach($topics as $topic)
            {!! $topic !!}
        @endforeach
    </div>
</div>