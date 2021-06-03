@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>
            Cars:
        </h1>

        <ul>
            @foreach ($cars as $car)
                <li>
                    <h2>
                        {{ $car -> name }} -> {{ $car -> brand -> name }}
                    </h2>
                    <ul>
                        @foreach ($car -> pilots as $pilot)
                            <li>
                                <a href="{{ route('pilots.show', $pilot -> id) }}">
                                    {{ $pilot -> firstname }} {{ $pilot -> lastname }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </main>
@endsection