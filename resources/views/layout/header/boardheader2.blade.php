<div class="header">
    <a href="/boards">
        <div class="banner"></div>
    </a>
    <div class="top-navigation">
        <div class="navigation-row">

            @if(!$isUserLoggedIn)
            <div class="item">
                <a href="/register">Registrierung</a>
            </div>
            <div class="item">
                <a href="/postpassword">Passwort vergessen?</a>
            </div>
            @endif

            <div class="item">
                <a href="/faq">Foren-FAQ</a>
            </div>

            @if($isUserLoggedIn)
            <div class="item">
                <a href="/user/setup">Setup</a>
            </div>
            <div class="item">
                <a href="">Mailbox</a>
            </div>
            @endif

            <div class="item">
                <a href="/useronline">Online?</a>
            </div>

            @if($isUserLoggedIn)
            <div class="item">
                <a href="/user/logout">Logout</a>
            </div>
            @endif
        </div>
    </div>
</div>