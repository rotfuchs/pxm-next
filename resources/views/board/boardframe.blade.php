@extends('layout.frameset')

@section('content')
    <div class="singlePage">
        <div class="wrapper">
            <div class="header">
                <a href="/boards">
                    <div class="banner"></div>
                </a>
                <div class="top-navigation">neue beitraege | suche | user| online? | registrieren | login | tm+7</div>
            </div>
            {!! $threadList !!}
        </div>
    </div>
@endsection