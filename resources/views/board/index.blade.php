@extends('layout.app')

@section('title', trans('board.title'))

@section('content')
    <table class="default" id="boardTable">
        <thead>
        <tr>
            <th>Rubrik</th>
            <th>Letzter Beitrag</th>
            <th>Moderator(en)</th>
        </tr>
        </thead>

        <tbody>
            @foreach($boards as $board)
                <?php /** @var \App\Services\Board\View\BoardIndexTableRowView $board */ ?>
                {!! $board !!}
            @endforeach
        </tbody>
    </table>

    <script>
        window.onload = function () {
            Board.initEvents();
        };
    </script>
@endsection