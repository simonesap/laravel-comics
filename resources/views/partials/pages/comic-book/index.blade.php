@extends('layout.layout')

@section('title', 'Home')

@section('content')

    <div class="h_100 w_100 bg_custom_black">

        <div class="container_default_2 flexRowWrap p_70">

            @forelse ($comics as $key => $comic)
                    <div class="m_10 w_15">
                        <a href="{{ route('show', ['id' => $key])}}">
                            <img src="{{ $comic['thumb']}}" alt="">
                            <h2 class="text_white">{{ $comic['series']}}</h2>
                        </a>
                    </div>
            @empty

                <p>Non ci sono elementi</p>

            @endforelse

        </div>
    </div>

@endsection
