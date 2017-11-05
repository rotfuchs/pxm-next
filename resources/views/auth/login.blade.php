<div class="loginContainer">
    <div class="defaultHeader">
        <span class="icon-arrow-right"></span> {{$welcomeMessage}}
    </div>

    @if(!$isLoggedIn)
    <div class="formContainer">
        <form action="/user/authenticate-redirect" method="post">
            {{ csrf_field() }}

            <div class="formElements">
                <label>
                    Username:
                    <input type="text" name="nickname" value="" placeholder="" />
                </label>
                <label>
                    Passwort:
                    <input type="password" name="password" value="" />
                </label>

                <input type="submit" value="Login" />
            </div>
            <div class="formInfo">
                Erst nach dem Login sind alle<br />
                Funktionen des Forums verfügbar.
            </div>
        </form>
    </div>
    @endif

    <div class="loginInfo @if(!$showError)noDisplay @endif">
        Passwort oder Benutzername ungültig, versuch's nochmal Jim.
    </div>

    <div class="loginFooter">
        Vor dem Erstellen neuer Beiträge bitte die Regeln und Hinweise des <a href="/faq">FORUM-FAQs</a> beachten!
        Nach dem Login können im <span class="highlight">SETUP</span> die Daten des User-Profils, das Passwort und diverse Einstellungen
        des Forums geändert werden. Viel Spaß!
    </div>
</div>