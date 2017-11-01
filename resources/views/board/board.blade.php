@extends('layout.frameset')

@section('content')
    <div class="classicFrameset">
        <div class="threadViewContainer">
            <div class="wrapper">
                <div class="header">
                    <a href="/boards">
                        <div class="banner"></div>
                    </a>
                    <div class="top-navigation">@include('layout.navigation.topnavigation')</div>
                </div>
                <div class="threadList">
                    {!! $threadList !!}
                </div>
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