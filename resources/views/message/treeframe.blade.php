@extends('layout.frameset')

@section('content')
    <div class="singlePage">
        <div class="wrapper">
            {!! $boardHeader !!}
            {!! $messageTree !!}
        </div>
    </div>
@endsection