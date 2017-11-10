<form>
    <div class="defaultHeader">
        Grundeinstellungen
    </div>
    <div class="row">
        <div class="extraslabel">Zugangsdaten in Cookie speichern</div>
        <div class="option">
            <input type="hidden" name="saveCookie" value="0" />
            <input type="checkbox" name="saveCookie" value="1" @if($saveCookie) checked="checked" @endif />
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">Foren-Layout wechseln</div>
        <div class="option">
            <select name="skinId">
                <option value="1" @if($skinId==1) selected="selected" class="current" @endif>play Retro</option>
                <option value="2" @if($skinId==2) selected="selected" class="current" @endif>Visions Retro</option>
                <option value="3" @if($skinId==3) selected="selected" class="current" @endif>OPM2</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Sortiermodus des Thread-Index
            beim Betreten einer Forums-Rubrik
        </div>
        <div class="option">
            <select name="threadListSort">
                <option value="default" @if($threadListSort=='default') selected="selected" class="current" @endif>Standard</option>
                <option value="thread" @if($threadListSort=='thread') selected="selected" class="current" @endif>Thread</option>
                <option value="last" @if($threadListSort=='last') selected="selected" class="current" @endif>Letzte Antwort</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Private Email-Adresse
        </div>
        <div class="option">
            <input type="email" name="privateMail" value="{!! $privateMail !!}" title="Private Email-Adresse" />
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Benachrichtigung bei neuer privater Mail?
        </div>
        <div class="option">
            <input type="hidden" name="privateNotification" value="0" />
            <input type="checkbox" name="privateNotification" value="1" @if($privateNotification) checked="checked" @endif />
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Verlinkte Bilder im Beitrag anzeigen?
        </div>
        <div class="option">
            <input type="hidden" name="showImages" value="0" />
            <input type="checkbox" name="showImages" value="1" @if($showImages) checked="checked" @endif />
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Smilies als Grafiken anzeigen?
        </div>
        <div class="option">
            <input type="hidden" name="showSmilies" value="0" />
            <input type="checkbox" name="showSmilies" value="1" @if($showSmilies) checked="checked" @endif />
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Signaturen in Beiträgen anzeigen?
        </div>
        <div class="option">
            <input type="hidden" name="showSignatues" value="0" />
            <input type="checkbox" name="showSignatues" value="1" @if($showSignatues) checked="checked" @endif />
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Eigenen User in Online-Liste anzeigen?
        </div>
        <div class="option">
            <input type="hidden" name="visible" value="0" />
            <input type="checkbox" name="visible" value="1" @if($visible) checked="checked" @endif />
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
            <input type="hidden" name="popupOnlineList" value="0" />
            <input type="checkbox" name="popupOnlineList" value="1" @if($popupOnlineList) checked="checked" @endif />
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Profil-Bilder & Infos in den Beiträgen anzeigen?
        </div>
        <div class="option">
            <input type="hidden" name="showUserProfileInfos" value="0" />
            <input type="checkbox" name="showUserProfileInfos" value="1" @if($showUserProfileInfos) checked="checked" @endif />
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Frame-Größen (oben/mitte/unten in Prozent)
        </div>
        <div class="option framesize">
            <input type="text" name="topFrameSize" value="{{$topFrameSize}}" maxlength="2" title="Framegröße oben" /> /
            <input type="text" maxlength="2" title="Mittelframe größe" /> /
            <input type="text" name="bottomFrameSize" value="{{$bottomFrameSize}}" maxlength="2" title="Framegröße unten" />
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Anzahl Frames in Rubrik-Ansicht
        </div>
        <div class="option">
            <select name="frameView" title="Anzahl Frames in Rubrik-Ansicht">
                <option value="3" @if($frameView==1) selected="selected" class="current" @endif>3</option>
                <option value="2" @if($frameView==2) selected="selected" class="current" @endif>2</option>
                <option value="1" @if($frameView==3) selected="selected" class="current" @endif>1</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Layout des Forums/genutzte Auflösung
        </div>
        <div class="option">
            <select name="layout" title="Layout des Forums">
                <option value="1" @if($userLayout==1) selected="selected" class="current" @endif>linksbündig/800x600</option>
                <option value="2" @if($userLayout==2) selected="selected" class="current" @endif>eingerückt/1024x768</option>
                <option value="3" @if($userLayout==3) selected="selected" class="current" @endif>maximiert/beliebig</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Darstellung des Thread-Verlaufs im Antw.-Index
        </div>
        <div class="option">
            <select name="listView" disabled="disabled">
                <option value="1" @if($listView==1 || 1==1) selected="selected" class="current" @endif>Grafisch</option>
                <option value="0" @if($listView==0 && 1==2) selected="selected" class="current" @endif>Listen-Punkte</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="extraslabel">
            Themen-Zeile im Antworten-Index abkürzen?
        </div>
        <div class="option">
            <input type="hidden" name="shortTopic" value="0" />
            <input type="checkbox" name="shortTopic" value="1" @if($shortTopic) checked="checked" @endif />
        </div>
    </div>
    <div class="row buttons">
        <input type="button" value="Änderungen speichern" />
        <input type="reset" value="Eingaben löschen" />
    </div>
</form>