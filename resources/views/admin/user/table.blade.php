<table class="table table-bordered table-hover" id="adminUserTable">
    <thead class="thead-light">
    <tr>
        <th scope="col">Benutzername</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Zuletzt Online</th>
        <th scope="col">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
        @foreach($userTableRows as $row)
            {!! $row !!}
        @endforeach
    </tbody>
</table>