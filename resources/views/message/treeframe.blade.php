@extends('layout.frameset')

@section('content')
    <div class="singlePage">
        <div class="wrapper">
            <div class="header">
                <div class="banner"></div>
                <div class="top-navigation">neue beitraege | suche | user| online? | registrieren | login | tm+7</div>
            </div>
            {!! $messageTree !!}
        </div>
    </div>
@endsection