@extends('layout.layout')

@section('title', 'Comics')

@section('comic')

    <div class="container_default">
        <div class="d_flex flex_row justify_between">
            <div class="h_100 w_100">
                <h2>ACTION COMICS #1000 THE DELUXE EDITION</h2>
                <h3 class="text_jungle">{{ $com['title']}}<h3>
                <img src="{{ $com['thumb']}}" alt="">
                <h4>{{ $com['description']}}</h4>
                <h4>{{ $com['price']}}</h4>
                <h4>{{ $com['series']}}</h4>
                <h4>{{ $com['sale_date']}}</h4>
                <h4>{{ $com['type']}}</h4>
            </div>
            <div class="h_100 w_100 d_flex justify_between">
                <div></div>
                <div>
                    <h4 class="text_end">ADVERTISEMENT</h4>
                    <img src="{{ asset('images/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>



@endsection

