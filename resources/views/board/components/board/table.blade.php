<div class="defaultHeader">
    Thread-Index: <span class="highlight">{{$name}}</span> |
    Rubrik
    <form action="/board" method="get" name="switchBoardTopForm" class="switchBoardForm">
        <select name="id" onchange="document.switchBoardTopForm.submit();">
            <option>wechseln...</option>
            @foreach($boards as $board)
                <?php /** @var \App\Services\Board\Model\Board $board */ ?>
                <option value="{{$board->id}}" @if($board->id==$id) class="current" @endif>{{$board->name}}</option>
            @endforeach
        </select>
    </form>
</div>
<table class="default threads">
    <thead>
        <tr>
            <th>Thema</th>
            <th>Autor</th>
            <th>Datum</th>
            <th class="viewCount">Views</th>
            <th class="replyCount">Antw.</th>
            <th>Letzte Antw.</th>
        </tr>
    </thead>
    <tbody>
        @foreach($threadTableRowViews as $tableRowView)
            <?php /** @var \App\Services\Thread\View\ThreadListTableRowView $tableRowView */ ?>
            {!! $tableRowView !!}
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2" class="info">
                Thread-Index: <span class="category">{{$name}}</span> | Rubrik
                <form action="/board" method="get" name="switchBoardBottomForm" class="switchBoardForm">
                    <select name="id" onchange="document.switchBoardBottomForm.submit();">
                        <option>wechseln...</option>
                        @foreach($boards as $board)
                            <?php /** @var \App\Services\Board\Model\Board $board */ ?>
                            <option value="{{$board->id}}" @if($board->id==$id) class="current" @endif>{{$board->name}}</option>
                        @endforeach
                    </select>
                </form>
            </td>
            <td colspan="4" class="navigation">
                @if($prevPage>=0)
                    <a href="/board/id/{{$id}}/page/{{$prevPage}}/{{$slug}}" data-board_id="{{$id}}" data-page="{{$prevPage}}"><span class="icon-arrow-left"></span> Zurück</a> |
                @endif

                <a href="/board/id/{{$id}}/page/{{$nextPage}}/{{$slug}}" data-board_id="{{$id}}" data-page="{{$nextPage}}">Ältere Threads anzeigen <span class="icon-arrow-right"></span></a>
            </td>
        </tr>
    </tfoot>
</table>