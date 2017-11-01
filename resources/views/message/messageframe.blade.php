@extends('layout.frameset')

@section('content')
    <div class="singlePage">
        <div class="wrapper">
            <div class="header">
                <a href="/boards">
                    <div class="banner"></div>
                </a>
                <div class="top-navigation">@include('layout.navigation.topnavigation')</div>
            </div>
            {!! $message !!}
            <div class="secondMessageFoot">
                <a href="/board/id/{{$board_id}}/thread/{{$thread_id}}/post/{{$post_id}}">Gesamten Thread anzeigen</a>
            </div>
        </div>
    </div>
@endsection