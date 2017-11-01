@extends('layout.app')

@section('title', trans('board.title'))

@section('content')
    @include('auth.login')

    <div class="boardIndex">
        <div class="defaultHeader">
            <span class="icon-arrow-right"></span> Rubrik-Index
        </div>
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
    </div>


    <script>
        window.onload = function () {
            Board.initEvents();
        };
    </script>
@endsection