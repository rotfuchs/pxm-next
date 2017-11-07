@extends('layout.frameset')

@section('content')
    <div class="singlePage">
        <div class="wrapper">
            {!! $boardHeader !!}

            {!! $message !!}
            <div class="secondMessageFoot">
                <a href="/board/id/{{$board_id}}/thread/{{$thread_id}}/post/{{$post_id}}/{{$slug}}">Gesamten Thread anzeigen</a>
            </div>
        </div>
    </div>
@endsection