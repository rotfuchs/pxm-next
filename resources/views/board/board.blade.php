@extends('layout.frameset')

@section('content')
    <div class="classicFrameset">
        <div class="threadViewContainer">
            <div class="wrapper">
                <div class="header">
                    <div class="banner"></div>
                    <div class="top-navigation">neue beitraege | suche | user| online? | registrieren | login | tm+7</div>
                </div>
                {!! $threadList !!}
            </div>
        </div>
        <div class="postTreeContainer">
            <div class="wrapper">
                {!! $messageTree !!}
            </div>
        </div>
        <div class="postContainer">
            <div class="wrapper">
                {!! $message !!}
            </div>
        </div>
    </div>

    <script>
        window.onload = function () {
            Thread.initEvents();
        };
    </script>
@endsection