<tr>
    <td>{{$name}}</td>
    <td>{{$description}}</td>
    <td class="options">

        <div class="dropdown">
            <button class="btn btn-outline-secondary btn-sm" type="button" id="boardOptions{{$id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span data-feather="menu"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="boardOptions{{$id}}">
                <a class="dropdown-item" href="/admin/boards/edit/{{$id}}">Bearbeiten</a>
            </div>
        </div>
    </td>
</tr>