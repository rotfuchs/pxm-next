@extends('layout.frameset')

@section('content')
    <div class="advancedFrameset">
        <div class="sidebar">
            <div class="postTreeContainer"></div>
            <div class="postContainer"></div>
        </div>
        <div class="content">
            <div class="threadViewContainer"></div>
        </div>
    </div>

    <script>
        window.onload = function () {
            Frameset.initAdvancedFrameset();
        };
    </script>
@endsection