<div class="header">
    <a href="/boards">
        <div class="banner"></div>
    </a>
    <div class="top-navigation">
        <div class="navigation-row">
            <div class="item">
                <a class="new-post" href="/post/new/board/{{$board_id}}" data-board_id="{{$board_id}}">Neuer Beitrag</a>
            </div>

            @if($isUserLoggedIn)
            <div class="item">
                <a href="/user/setup">Setup</a>
            </div>
            <div class="item">
                <a href="/mailbox" target="_blank">Mailbox</a>
            </div>
            @endif

            <div class="item">
                <a class="search" href="/search/board/{{$board_id}}" data-board_id="{{$board_id}}">Suche</a>
            </div>
            <div class="item">
                <a class="userSearch" href="/user">User</a>
            </div>
            <div class="item">
                <a href="/useronline">Online?</a>
            </div>

            @if(!$isUserLoggedIn)
            <div class="item">
                <a href="/register">Registrierung</a>
            </div>
            <div class="item">
                <a href="/boards">Login</a>
            </div>
            @endif

            @if($isUserLoggedIn)
                <div class="item">
                    <a href="/user/logout">Logout</a>
                </div>
            @endif
        </div>
    </div>
</div>