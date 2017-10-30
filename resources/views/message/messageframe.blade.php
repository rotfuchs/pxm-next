@extends('layout.frameset')

@section('content')
    <div class="singlePage">
        <div class="wrapper">
            <div class="header">
                <div class="banner"></div>
                <div class="top-navigation">neue beitraege | suche | user| online? | registrieren | login | tm+7</div>
            </div>
            {!! $message !!}
            <div class="secondMessageFoot">
                <a href="/board/id/{{$board_id}}/thread/{{$thread_id}}/post/{{$post_id}}">Gesamten Thread anzeigen</a>
            </div>
        </div>
    </div>
@endsection