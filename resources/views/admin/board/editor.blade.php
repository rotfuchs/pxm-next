@extends('layout.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Board bearbeiten</h1>
    </div>

    <form>
        <input type="hidden" name="id" value="{{$id}}">

        <div class="form-group">
            <label for="inputEmail4">Name</label>
            <input type="name" class="form-control" id="inputEmail4" placeholder="Name" value="{{$name}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Beschreibung</label>
            <textarea class="form-control" id="" rows="3">{{$description}}</textarea>
            <div class="form-check">
                <input type="hidden" name="active" value="0">
                <input type="checkbox" class="form-check-input" id="" name="active" value="1" @if($active==1) checked="checked" @endif>
                <label class="form-check-label" for="">Aktiviert</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Speichern</button>
        <a class="btn btn-secondary" href="/admin/boards" role="button">Abbrechen</a>
    </form>

@endsection