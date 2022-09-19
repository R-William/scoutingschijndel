@extends('app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Organisatie</h1>
        </div>
        <div class="col-md-6">
            <p>
            Organisatie
            Scouting Schijndel is een bloeiende vereniging, opgericht in 1945. Iedere week komen de bijna 200 jeugdleden naar ons Scouting Centrum, dat sinds 1980 gevestigd is aan de Smaldonkstraat. Ze beleven met elkaar een geweldige tijd. Afwisselend worden er creatieve en actieve opkomsten gehouden. Soms binnen, maar vaak ook buiten op ons mooie buitenterrein. Een kookprogramma kan varieren van koekjes bakken tot het bakken van een eigengemaakte pizza in een zelfgebouwde oven. Een tocht lopen kan met één van de talrijke routetechnieken, met het klassieke kaart en kompas of diverse moderne communicatiemiddelen. Naarmate de leden ouder worden is de uitdaging telkens weer net iets groter. 
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('')}}images/pages/organisation/scoutoma_2015.jpeg" class="img-full-width" alt="Scouting schijndel tijdens Scoutoma 2015">
        </div>
        <div class="col-md-12">
            <p>
            De jeugdleden worden begeleid door een groep van ruim 50 enthousiaste vrijwilligers, bestaande uit stafleden, bestuursleden en beheerders van gebouw, materiaal en website. Via diverse trainingen wordt ervoor gezorgd dat de vrijwilligers voldoende kennis opdoen over het Scoutingspel, het omgaan met de kinderen en diverse andere competenties. Ook zijn alle vrijwilligers in het bezit van een Verklaring Omtrent Gedrag (VOG) en onderschrijven zij allemaal de Gedragscode zoals deze binnen Scouting Nederland is vastgesteld, waarmee een zo veilig mogelijke omgeving wordt gecreëerd. 
            </p>
            <p>
            Aan het einde van ieder Scoutingjaar gaan alle groepen op zomerkamp. De allerjongste leden overnachten een paar nachtjes in een blokhut in de buurt, terwijl de oudste jeugdleden een week hun eigen kamp, vaak in het buitenland, organiseren. Om wat extra's te kunnen doen tijdens de zomerkampen, gaan de staf-en jeugdleden onder andere op pad om oud-papier op te halen, fietsen te parkeren tijdens Hartemert, hamburgers te verkopen op de Boschwegse Mèrt of de Restolounge tijdens Paaspop schoon te houden. Ook op de jaarlijkse Kerstmarkt in en rondom ons eigen Scouting Centrum worden zelfgemaakte en gedoneerde kerstspullen verkocht onder het genot van een warm drankje en een kampvuur, waar broodjes op gebakken worden.
            </p>
            <p>
            Daarnaast draagt Scouting Schijndel zijn steentje bij aan de maatschappij door aanwezig te zijn bij de dodenherdenking op de markt. De Gidsen dragen de kransen, terwijl de Rowans de erehaag vormen bij de Mariakapel. Ook biedt Scouting Schijndel stageplekken voor de maatschappelijke stages.
            </p>
            <p>
            Op deze website is op een overzichtelijke manier allerlei informatie verzameld over de diverse groepen, het aanmelden van nieuwe leden, de contributie en de verhuur van ons Scouting Centrum. Met verslagen, verhalen en vooral veel foto's proberen we een indruk te geven van wat Scouting Schijndel te bieden heeft voor jong en oud. Ook is Scouting Schijndel te vinden op Facebook, Instagram en Twitter. 
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include('particles.slider-bigg')
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection