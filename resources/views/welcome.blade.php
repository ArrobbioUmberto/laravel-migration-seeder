@extends('layouts.app')
@section('content')

<div class="container py-5">
    <div class="row gy-3 justify-content-center">
        @forelse ($trains as $train)
        <div class="card col-5 m-3 text-bg-primary">
            <div class="card-body">
                <h5 class="card-title">Compagnia: {{$train->company}}</h5>
                <h5 class="card-title">Citta' di partenza: {{$train->departure_station}}</h5>
                <h5 class="card-title">Citta' d'arrivo: {{$train->arrival_station}}</h5>
                <h3 class="card-title">Orari</h3>
                <p class="card-text">Partenza: {{$train->departure_time}}</p>
                <p class="card-text">Arrivo: {{$train->arrival_time}}</p>
                <p class="card-text">Numero carrozze: {{$train->number_of_coaches}}</p>
                <p class="card-text"><small class="text-body-secondary">In orario: @if (($train->on_schedule) === 1) SI @elseif(($train->on_schedule) === 0) NO @else - @endif</small></p>
            </div>
        </div>
        @empty


        @endforelse
    </div>
</div>
@endsection