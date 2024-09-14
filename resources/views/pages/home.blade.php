@extends('app')
@section('content')
    <div class="hide-mobile">
        @include('particles.slider-small')
    </div>
    <div class="container-fluid">
        @include('particles.groups')
    </div>
    <div class="container">
        <p>
            Bij Scouting Schijndel bieden wij een unieke en opwindende ervaring voor kinderen, jongeren en volwassenen van alle leeftijden. Als actieve scoutinggroep in Schijndel geloven wij in het ontwikkelen van vaardigheden, het bevorderen van teamwork en het creëren van onvergetelijke avonturen. Onze programma's zijn ontworpen om persoonlijke groei, creativiteit en een sterke gemeenschapszin te bevorderen.
        </p>
        </hr>
    </div>
    <div class="container-fluid bg-light">
        <div class="container">
            @include('particles.acties')
        </div>    
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4 d-flex flex-column align-items-center mb-4">
                <img src="/images/icons/tent.png" alt="Icon 1" class="img-fluid mb-2" style="max-width: 50px;">
                <h5>Spannende activiteiten</h5>
                <p class="text-muted">
                    Van kamperen en avontuurlijke tochten tot creatieve workshops en teamopdrachten – onze activiteiten zijn afgestemd op de leeftijd en interesses van onze leden.
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center mb-4">
                <img src="/images/icons/learning.png" alt="Icon 1" class="img-fluid mb-2" style="max-width: 50px;">
                <h5>Leerzame Ervaringen</h5>
                <p class="text-muted">
                    We combineren plezier met educatie. Onze scoutinggroepen leren praktische vaardigheden, zoals navigeren met een kompas, eerste hulp, en duurzaamheid, terwijl ze nieuwe vrienden maken.                </p>
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center mb-4">
                <img src="/images/icons/unity.png" alt="Icon 1" class="img-fluid mb-2" style="max-width: 50px;">
                <h5>Inclusie en Diversiteit</h5>
                <p class="text-muted">                    
                    Wij verwelkomen iedereen die een passie heeft voor avontuur en samenwerking. Bij ons is iedereen welkom, ongeacht achtergrond of ervaring. 
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2" >
                    <p>
                        Scouting is een leuke en uitdagende manier om nieuwe vaardigheden te leren, nieuwe vrienden te maken en deel te nemen aan avontuurlijke activiteiten. Het is ook een geweldige manier om tijd door te brengen met kinderen en jongeren, en om te werken aan persoonlijke ontwikkeling en leiderschap.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2" >
                <img src="{{asset('')}}images/logos/logo-laat-je-uitdagen.webp" alt="scouting laat je uitdagen" class="img-fluid"/>
            </div>
        </div>
    </div>
@endsection