@extends('layout.frameset')

@section('content')
    <div class="classicFrameset">
        <div class="threadViewContainer">
            <div class="content">
                <div class="wrapper">
                    <div class="header">
                        <div class="banner"></div>
                        <div class="top-navigation">registrierung | passwort vergessen? | faq | online? | tm+7</div>
                    </div>
                </div>
            </div>
            <div class="border"></div>
        </div>
        <div class="postTreeContainer">
            <div class="wrapper">
            </div>
        </div>
        <div class="postContainer">
            <div class="wrapper">
            </div>
        </div>
    </div>

    <script>
        window.onload = function () {
            Frameset.initClassicFrameset();
            Frameset.initAdvancedFrameset();
        };
    </script>
@endsection