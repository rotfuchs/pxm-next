<form>
    <div class="defaultHeader">
        Grundeinstellungen
    </div>
    <div class="row">
        <div class="extraslabel">Zugangsdaten in Cookie speichern</div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">Foren-Layout wechseln</div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Sortiermodus des Thread-Index
            beim Betreten einer Forums-Rubrik
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Benachrichtigung bei neuer privater Mail?
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Verlinkte Bilder im Beitrag anzeigen?
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Smileys als Grafiken anzeigen?
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Signaturen in Beiträgen anzeigen?
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Eigenen User in Online-Liste anzeigen?
        </div>
        <div class="option">
        </div>
    </div>
    <div class="defaultHeader">
        Erweiterte Einstellungen
    </div>
    <div class="row">
        <div class="extraslabel">
            Auto-Popup der Online-Liste bei Login?
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Profil-Bilder & Infos in den Beiträgen anzeigen?
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Frame-Größen (oben/mitte/unten in Prozent)
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Anzahl Frames in Rubrik-Ansicht
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Layout des Forums/genutzte Auflösung
        </div>
        <div class="option">
            <select name="layout">
                <option value="1" @if($userLayout==1) selected="selected" @endif>linksbündig/800x600</option>
                <option value="2" @if($userLayout==2) selected="selected" @endif>eingerückt/1024x768</option>
                <option value="3" @if($userLayout==3) selected="selected" @endif>maximiert/beliebig</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Darstellung des Thread-Verlaufs im Antw.-Index
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Themen-Zeile im Antworten-Index abkürzen?
        </div>
        <div class="option">
        </div>
    </div>
    <div class="row buttons">
        <input type="button" value="Änderungen speichern" />
        <input type="reset" value="Eingaben löschen" />
    </div>
</form>