<div class="defaultHeader"></div>
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
                Thread-Index: <span class="category">Spielefront</span>
            </td>
            <td colspan="4" class="navigation">
                Ältere Threads anzeigen
            </td>
        </tr>
    </tfoot>
</table>