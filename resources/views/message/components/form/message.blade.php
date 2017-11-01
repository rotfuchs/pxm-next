<div class="messageForm">
    <div class="defaultHeader">
        <span class="icon-arrow-right"></span>
        Neuen Beitrag erstellen:
    </div>

    <form>
        <div class="loginFields">
            <label>
                <div class="firstLabel">Username:</div>
                <input type="text" name="username" />
            </label>

            <label>
                Passwort:
                <input type="password" name="password" />
            </label>
        </div>

        <div class="topicFields">
            <div class="subject">
                <label>
                    <div class="firstLabel">Thema:</div>
                    <div class="input">
                        <input type="text" name="subject" />
                    </div>

                </label>
            </div>
            <div class="replyMailInfo">
                <label>
                    <input type="hidden" name="replyMail" value="0" />
                    <input type="checkbox" name="replyMail" value="1" />

                    Mail bei neuer Antwort?
                </label>
            </div>
        </div>

        <div class="textBody">
            <textarea name="content"></textarea>
        </div>

        <div class="options">
            <div class="styleOptions">
                <div class="styleButtons">
                    <div>
                        Text formatieren:
                        <input type="button" value="Fett" class="bold" />
                        <input type="button" value="Kursiv" class="italic" />
                        <input type="button" value="Unterstrichen" class="underline" />
                    </div>
                    <div>
                        Link einfügen:
                        <input type="button" value="http://..." />
                    </div>
                    <div>
                        Bild einfügen:
                        <input type="button" value="img:" />
                    </div>
                    <div class="smilieOption">
                        <a href="">Smiley Code &raquo;</a>
                    </div>
                </div>
            </div>

            <div class="smilieContainer">

            </div>
        </div>

        <div class="footerLinks">
            <a href="">Eingabe verwerfen</a> |
            <a href="">Vorschau des Beitrags</a> |
            <a href="">Beitrag abschicken <span class="icon-arrow-right"></span></a>
        </div>
    </form>
</div>