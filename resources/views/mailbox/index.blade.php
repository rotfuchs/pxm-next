@extends($layout)

@section('title', trans('mailbox.inbox'))

@section('content')
    {!! $boardHeaderView !!}

    <div class="userMailboxContainer">
        <div class="userprofile headline">
            telemassaker.de | Mailbox: <span>{{$username}}</span>
        </div>

        <div class="defaultHeader tabHeader">
            <div class="tab"><a href="/mailbox/tab/inbox" class="{{$inboxTabClass}}">Posteingang</a></div>
            <div class="tab"><a href="/mailbox/tab/archive" class="{{$archiveTabClass}}">Archiv</a></div>
        </div>
        <div class="tabHeaderAddon"></div>


        <div class="inboxContainer {{$inboxTabClass}}">
            <table class="default mailbox">
                <thead>
                <tr>
                    <th class="checkbox">
                        <input type="checkbox" />
                    </th>
                    <th class="topic">Thema</th>
                    <th class="author">Absender</th>
                    <th class="created">Erstellt</th>
                    <th class="replyCount">Antw.</th>
                    <th class="lastReply">Letzte Antw.</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
       </div>

        <div class="archiveContainer {{$archiveTabClass}}">

        </div>
    </div>
@endsection