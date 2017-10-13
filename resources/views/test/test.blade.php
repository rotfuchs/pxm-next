@extends('layout.frameset')

@section('content')
    <div class="classicFrameset">
        <div class="threadViewContainer"></div>
        <div class="postTreeContainer"></div>
        <div class="postContainer"></div>
    </div>

    <script>
        window.onload = function () {
            Frameset.initClassicFrameset();
        };
    </script>
@endsection