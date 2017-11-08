@extends($layout)

@section('title', trans('user.profile'))

@section('content')
    {!! $boardHeaderView !!}

    <div class="userSetupContainer">
        <div class="userprofile headline">
            telemassaker.de | Setup: <span>{{$username}}</span>
        </div>

        <div class="defaultHeader tabHeader">
            <div class="tab">User-Profil editieren</div>
            <div class="tab">Passwort ändern</div>
            <div class="tab">Sonstige Einstellungen</div>
        </div>
        <div class="tabHeaderAddon"></div>


        <div class="profileContainer">
            @include('user.components.setup.profile')
        </div>

    </div>
@endsection