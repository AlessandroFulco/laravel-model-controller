@extends('templates.base')


@section('mainPage')

    <div class="container">
        @foreach ($movies as $film)
            <div class="film-card">
                <h2>
                    {{$film->title}}
                </h2>
                <ul>
                    <li>
                        Titolo originale:
                        {{$film->original_title}}
                    </li>
                    <li>
                        Nazionalità:
                        {{$film->nationality}}
                    </li>
                    <li>
                        Data:
                        {{$film->date}}
                    </li>
                    <li>
                        Voto:
                        {{$film->vote}}
                    </li>
                </ul>
            </div>
        @endforeach
    </div>


@endsection

