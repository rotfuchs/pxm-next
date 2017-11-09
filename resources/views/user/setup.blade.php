@extends($layout)

@section('title', trans('user.profile'))

@section('content')
    {!! $boardHeaderView !!}

    <div class="userSetupContainer">
        <div class="userprofile headline">
            telemassaker.de | Setup: <span>{{$username}}</span>
        </div>

        <div class="defaultHeader tabHeader">
            <div class="tab"><a href="/user/setup/tab/profile" class="{{$profileTabClass}}">User-Profil editieren</a></div>
            <div class="tab"><a href="/user/setup/tab/password" class="{{$passwordTabClass}}">Passwort ändern</a></div>
            <div class="tab"><a href="/user/setup/tab/extras" class="{{$extrasTabClass}}">Sonstige Einstellungen</a></div>
        </div>
        <div class="tabHeaderAddon"></div>


        <div class="profileContainer {{$profileTabClass}}">
            @include('user.components.setup.profile')
        </div>

        <div class="passwordContainer {{$passwordTabClass}}">
            @include('user.components.setup.password')
        </div>

        <div class="extrasContainer {{$extrasTabClass}}">
            @include('user.components.setup.extras')
        </div>
    </div>
@endsection