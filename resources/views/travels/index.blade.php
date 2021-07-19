@extends('layout.app')

@section('title', 'Viaggi')

@section('content')
<div class="gallery">

    @foreach($travels as $travel)

    <div class="card">
        <div class="poster">
            <img src="{{$travel->poster}}" alt="">
        </div>
        <h2>{{$travel->country}}</h2>
        <h3>{{$travel->city}}</h3>
    </div>

    @endforeach
</div>


@endsection