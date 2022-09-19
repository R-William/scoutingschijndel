@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1 class="my-1">Kom gratis kijken</h1>
                <p>
                    Je mag bij Scouting Schijndel altijd 3 keer gratis komen kijken. Je kunt dan zelf ervaren hoe leuk Scouting is. Als je wil komen kijken, vul dan het onderstaande formulier in. Wij nemen dan contact met je op om af te spreken wanneer je kunt komen kijken.<br />
                    <br />
                    <b>Let op!</b><br />
                    Heb je geen reactie ontvangen op de kijk aanvraag? Kijk dan ook even in je spambox.
                </p>
                @include('particles/inschrijven')
            </div>
            <div class="col-md-3 groups-items">
                @include('particles.groups')
            </div>
        </div>
    </div>
@endsection