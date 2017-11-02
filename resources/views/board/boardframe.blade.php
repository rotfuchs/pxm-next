@extends('layout.frameset')

@section('content')
    <div class="singlePage">
        <div class="wrapper">
            {!! $boardHeader !!}

            {!! $threadList !!}
        </div>
    </div>
@endsection