@extends('app')
@section('content')

<div class="container">
    <div class="row">
        <h1>Actie</h1>
        <p>Niks is tegenwoordig meer gratis, om ervoor te zorgen dat de leden toch leuke activiteiten (op kamp) krijgen doen sommige groepen 1 of meerdere acties om geld te verdienen, dit kunnen groepen alleen doen of in combinatie met andere. Acties die niet spcifiek aan een groep hangen dragen bij aan onderhoud aan materiaal en gebouw vereniging breed.</p>          
    </div>
    <div class="row">
        @include('particles.acties')
    </div>
</div>
@endsection