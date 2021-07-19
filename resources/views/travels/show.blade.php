@extends('layout.app')

@section('title', 'Viaggi')

@section('content')



<div class="container">

    <div class="show">
        <div class="poster">
            <img src="{{$travel->poster}}" alt="">
        </div>
        <h3>{{$travel->country}}</h3>
        <h3>{{$travel->city}}</h3>
        <p>Info : {{$travel->info}}</p>
        <p>Partenza :{{$travel->departure}}</p>
        <p>Notti : {{$travel->night}}</p>
        <p>Prezzo a persona :{{$travel->price}}</p>

    </div>
</div>





@endsection