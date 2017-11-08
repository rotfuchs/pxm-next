<form>
    <div class="row">
        <div class="firstlabel">Vorname</div>
        <div class="option">
            <input type="text" name="firstName" value="{{$firstName}}" title="Vorname" />
        </div>
        <div class="secLabel">Nachname</div>
        <div class="option">
            <input type="text" name="lastName" value="{{$lastName}}" title="Nachname" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">
            Bild
            <div class="info">
                (max. 140x160, Formate:<br /> jpg/gif, max. 50 KByte)
            </div>
        </div>
        <div class="option"></div>
    </div>
    <div class="row">
        <div class="firstlabel">E-Mail</div>
        <div class="option">
            <input type="email" name="email" value="{{$email}}" title="E-Mail" />
        </div>
        <div class="secLabel">Wohnort</div>
        <div class="option">
            <input type="text" name="city" value="{{$city}}" title="Wohnort" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">Jahrgang</div>
        <div class="option">
            <input type="text" name="year" value="{{$year}}" title="Jahrgang" />
        </div>
        <div class="secLabel">Beruf</div>
        <div class="option">
            <input type="text" name="job" value="{{$job}}" title="Beruf" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">XBL-Gamertag</div>
        <div class="option">
            <input type="text" name="xbl_gamertag" value="{{$xbox_gamertag}}" title="XBL-Gamertag" />
        </div>
        <div class="secLabel">PSN-ID</div>
        <div class="option">
            <input type="text" name="psn_id" value="{{$psnId}}" title="PSN-ID" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">Nintendo</div>
        <div class="option">
            <input type="text" name="wii_code" value="{{$wiiCode}}" title="Nintendo" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">Homepage URL</div>
        <div class="option">
            <input type="text" name="url" value="{{$url}}" title="Homepage URL" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">Hobbies und<br /> weitere Angaben</div>
        <div class="option">
            <textarea name="hobbies" title="Hobbies">{{$hobbies}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">
            Auto-Signatur für<br /> Forums-Beiträge
            <div class="info">(noch 120 Zeichen übrig)</div>
        </div>
        <div class="option">
            <textarea name="signature" title="Signatur">{{$signature}}</textarea>
        </div>
    </div>
    <div class="defaultHeader">
        PC- und Videospiele
    </div>
    <div class="row">
        <div class="firstlabel">Erstes Spiel</div>
        <div class="option">
            <input type="text" name="firstGame" value="{{$firstGame}}" title="Erstes Spiel" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">
            Lieblings-Genres
            <div class="info">(Spiel)</div>
        </div>
        <div class="option">
            <input type="text" name="favoriteGameGenres" value="{{$favoriteGameGenres}}" title="Lieblings-Genres" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">Spielsammlung URL</div>
        <div class="option">
            <input type="text" name="gameCollectionUrl" value="{{$gameCollectionUrl}}" title="Spielsammlung URL" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">Lieblingsspiele</div>
        <div class="option">
            <textarea name="favoriteGames" title="LiebLingsspiele">{{$favoriteGames}}</textarea>
        </div>
    </div>
    <div class="defaultHeader">
        DVD/Filme
    </div>
    <div class="row">
        <div class="firstlabel">DVD Profiler URL</div>
        <div class="option">
            <input type="text" name="dvdProfilerUrl" value="{{$dvdProfilerUrl}}" title="DVD Profiler URL" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">
            Lieblings-Genres
            <div class="info">(Film)</div>
        </div>
        <div class="option">
            <input type="text" name="favoriteMovieGenres" value="{{$favoriteMovieGenres}}" title="Lieblings-Genres" />
        </div>
    </div>
    <div class="row">
        <div class="firstlabel">Lieblingsfilme</div>
        <div class="option">
            <textarea name="favoriteMovies" title="Lieblingsfilme">{{$favoriteMovies}}</textarea>
        </div>
    </div>
    <div class="row buttons">
        <input type="button" value="Profil speichern" />
        <input type="reset" value="Eingaben löschen" />
    </div>
</form>
