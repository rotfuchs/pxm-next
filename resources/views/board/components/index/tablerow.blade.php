<tr>
    <td>
        <div>
            <a href="" class="name">{{$name}}</a>
        </div>
        <div>{{$description}}</div>
    </td>
    <td class="lastMsg">{{$lastMsgDateTime}}</td>
    <td class="mods">
        <?php /** @var \App\Services\User\View\UserNameLinkView[] $modList */ ?>
        {!! implode($modList, ', ') !!}
    </td>
</tr>