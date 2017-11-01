@extends('layout.frameset')

@section('content')
    <div class="singlePage">
        <div class="wrapper">
            <div class="header">
                <div class="banner"></div>
                <div class="top-navigation">@include('layout.navigation.topnavigation')</div>
            </div>
            {!! $messageTree !!}
        </div>
    </div>
@endsection