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
</table>