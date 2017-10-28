@extends($layout)

@section('title', trans('user.profile'))

@section('content')

    <div class="userprofile headline">
        telemassaker.de | User-Profil: <span>{{$username}}</span>
    </div>

    <table class="default userprofile">
        <thead></thead>
        <tbody class="general">
            <tr>
                <th>Mitglied <a href="http://seitseid.de" target="_blank">seit</a>:</th>
                <td>{{$memberSinceDateTime}}</td>
                <th class="secondLabel"><span>Beiträge:</span></th>
                <td>{{$msgCount}}</td>
                <td rowspan="7" class="avatar">
                    <img src="" alt="avatar" />
                </td>
            </tr>
            <tr>
                <th>Name:</th>
                <td colspan="3">{{$name}}</td>
            </tr>
            <tr>
                <th>E-Mail:</th>
                <td colspan="3">{{$email}}</td>
            </tr>
            <tr>
                <th>Wohnort:</th>
                <td>{{$city}}</td>
                <th class="secondLabel"><span>Jahrgang:</span></th>
                <td>{{$ageGroup}}</td>
            </tr>
            <tr>
                <th>Beruf:</th>
                <td colspan="3">{{$job}}</td>
            </tr>
            <tr>
                <th>Homepage:</th>
                <td colspan="3">{{$website}}</td>
            </tr>
            <tr>
                <th>XBL-Gamertag:</th>
                <td colspan="3">{{$xboxGamertag}}</td>
            </tr>
            <tr>
                <th>PSN-ID:</th>
                <td colspan="4">{{$psnId}}</td>
            </tr>
            <tr>
                <th>WiFi-Code:</th>
                <td colspan="4">{{$nintendoCode}}</td>
            </tr>
            <tr>
                <th>Weitere Hobbies:</th>
                <td colspan="4">{{$hobbies}}</td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th colspan="5">PC- und Videospiele</th>
            </tr>
        </thead>
        <tbody class="games">
            <tr>
                <th>Erstes Spiel:</th>
                <td colspan="4">{{$firstGame}}</td>
            </tr>
            <tr>
                <th>Lieblings-Genres:</th>
                <td colspan="4">{{$favoriteGameGenre}}</td>
            </tr>
            <tr>
                <th>Lieblingsspiele:</th>
                <td colspan="4">{{$favoriteGames}}</td>
            </tr>
        </tbody>
        <thead>
        <tr>
            <th colspan="5">Filmprofil</th>
        </tr>
        </thead>
        <tbody class="movies">
            <tr>
                <th>Lieblings-Genre:</th>
                <td colspan="4">{{$favoriteMovieGenre}}</td>
            </tr>
            <tr>
                <th>Lieblings-Filme:</th>
                <td colspan="4">{{$favoriteMovies}}</td>
            </tr>
            <tr>
                <th>DVD-Profiler URL:</th>
                <td colspan="4">{{$dvdProfilerLink}}</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5"><span class="label">Letztes Profil-Update:</span> {{$lastProfileUpdateDateTime}}</td>
            </tr>
            <tr>
                <td colspan="5">-</td>
            </tr>
        </tfoot>
    </table>
@endsection