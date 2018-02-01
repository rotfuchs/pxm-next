<table class="table table-bordered table-hover" id="adminSmilieTable">
    <thead class="thead-light">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Smilie</th>
        <th scope="col">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tableRows as $row)
        {!! $row !!}
    @endforeach
    </tbody>
</table>