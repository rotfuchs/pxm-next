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
            {!! $newMessageForm !!}
        </div>
    </div>
@endsection