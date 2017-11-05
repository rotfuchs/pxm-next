@extends('layout.app')

@section('title', trans('faq.title'))

@section('content')
    {!! $boardHeaderView !!}

    <div class="faqContainer">
        <div class="headline1">{{trans('faq.title')}}</div>

        <div class="categories">
            @foreach($categories as $category)
                {!! $category !!}
            @endforeach
        </div>
    </div>
@endsection