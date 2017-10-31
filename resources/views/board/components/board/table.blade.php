<div class="defaultHeader">
    Thread-Index: <span class="category">{{$name}}</span> |
    Rubrik
    <select>
        <option></option>
    </select>
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
                <select>
                    <option></option>
                </select>
            </td>
            <td colspan="4" class="navigation">
                @if($prevPage>=0)
                    <a href="/board/id/{{$id}}/page/{{$prevPage}}"><span class="icon-arrow-left"></span> Zurück</a> |
                @endif

                <a href="/board/id/{{$id}}/page/{{$nextPage}}">Ältere Threads anzeigen <span class="icon-arrow-right"></span></a>
            </td>
        </tr>
    </tfoot>
</table>