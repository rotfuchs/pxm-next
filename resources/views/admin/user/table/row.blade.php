<tr>
    <td>{{$username}}</td>
    <td>{{$email}}</td>
    <td>{{$lastOnlineDate}}</td>
    <td class="options">

        <div class="dropdown">
            <button class="btn btn-outline-secondary btn-sm" type="button" id="userOptions{{$id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span data-feather="menu"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userOptions{{$id}}">
                <button class="dropdown-item" type="button">Bearbeiten</button>
                {{--<button class="dropdown-item" type="button">Sperren</button>--}}
                {{--<button class="dropdown-item" type="button">Löschen</button>--}}
            </div>
        </div>
    </td>
</tr>