@extends('templates.base')


@section('mainPage')

    <ul>
        @foreach ($movies as $film)
            <li>
                {{$film->title}}
            </li>
        @endforeach
    </ul>

@endsection

