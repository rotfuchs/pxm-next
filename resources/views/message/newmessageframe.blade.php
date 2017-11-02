@extends('layout.frameset')

@section('content')
    <div class="singlePage">
        <div class="wrapper">
            {!! $boardHeader !!}

            {!! $newMessageForm !!}
        </div>
    </div>
@endsection