@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1>{{ $group->name }}</h1>
            <p>{{ $group->description }}</p> 
            @if (isset($acties))
                @include('particles.acties')
            @endif
            @include('particles.slider-bigg')
        </div>
        <div class="col-md-3">
            <h3>Draaitijden</h3>
            @foreach ($group->sub_groups as $subgroup)
                <b>{{ $subgroup->name }}</b> {{ $subgroup->genderText }}
                <p>{{ $subgroup->date }} van {{ $subgroup->start_time }} - {{ $subgroup->end_time }}</p>      
            @endforeach
            <hr class="border-top my-3"/>
            <h3>Gratis kijken</h3>

            Bij Scouting Schijndel mag je altijd eerst drie keer gratis komen kijken. Na drie opkomsten weet je zeker dat Scouting echt leuk is en kun je je echt inschrijven bij de groep.

            <hr class="border-top my-3"/>
            <a href="/kom-kijken/{{ $group->name }}" class="btn btn-success">Kom kijken</a>
        </div>
    </div>
</div>
@endsection