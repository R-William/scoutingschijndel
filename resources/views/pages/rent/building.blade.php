@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Huren van Scoutingcentrum Schijndel</h1>
            <br />
            <p>Wil je een weekend of kamp organiseren en ben je op zoek naar een mooie ruime locatie? Kom dan naar het Scoutingcentrum aan de Smaldonkstraat in Schijndel. Er mogen maximaal 75 personen in het gebouw slapen.</p>
            <h2>Faciliteiten</h2>
            <p>Ons rookvrije gebouw verhuren wij voor scouting activiteiten en activiteiten van andere jeugdverenigingen. Daarnaast kan het gebouw gehuurd worden voor activiteiten die passen binnen het bestemmingsplan. Dit zijn activiteiten van educatieve, medische, sociaal-culturele of levensbeschouwelijke aard en activiteiten ten behoeve van openbare dienstverlening. Het houden van recepties en feesten is nadrukkelijk niet toegestaan.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>Wij beschikken over een groot gebouw met drie ruime lokalen (100, 100 en 70m2). De twee lokalen van 100 m2 zijn gescheiden door een schuifwand die naar behoefte open of gesloten kan worden.</p>
            <p>Het gebouw heeft twee dames- en twee herentoiletten met daarbij elk een douche. Daarnaast is er een apart invalidentoilet met douche.</p>
            <p>De keuken is voorzien van een (kleine) koelkast, koffiezetapparaat, waterkoker, oven, magnetron en een 8-pits gasstel. In de zomerperiode is de ruimte naast de keuken vrijgemaakt voor opslag van voorraden.</p>
            <p>Het buitenterrein is geheel omheind en voorzien van een groot grasveld dat verlicht kan worden. Hier mogen eventueel ook eigen tenten worden opgezet. Graven en boren in het grasveld is echter streng verboden. Op het buitenterrein staan 3 grote picknicktafels.</p>
            <p>Ook is er een mooie grote kampvuurcirkel aanwezig, die voorzien is van verlichting en electriciteitsaansluitingen. In de kampvuurcirkel is een overdekte opslag/podium aanwezig. Het kampvuurreglement (aanwezig in de kampvuur-cirkel) dient correct te worden nageleefd. Zo mag er niet gestookt worden bij Fase 2 voor natuurbrandrisico.</p>
            <p>Het scoutingcentrum beschikt o.a. over de volgende faciliteiten:</p>
            <ul>
                <li>Keuken met koelkast, gasstel en oven</li>
                <li>Gescheiden toiletten en douches</li>
                <li>Invalidentoilet en douche</li>
                <li>Omheind en verlicht buitenterrein</li>
                <li>Ruime kampvuurcirkel</li>
                <li>3 flinke picknicktafels met banken</li>
                <li>Telefoon en Wifi-Internet</li>
                <li>Brievenbus</li>
            </ul> 
        </div>
        <div class="col-md-6">
            <img class="w-100 p-3" src="{{ asset('images/building/map.png') }}"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1662405882254!6m8!1m7!1sCAoSLEFGMVFpcFBHTENCNnJpaEMwcHBnaDhKeGU1Q3VlYndVcUUzaEFuYUtjTnln!2m2!1d51.620608333333!2d5.4467527777778!3f140!4f0!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-2">
            <a href="/verhuur/kalender" class="btn btn-success">Boek de blokhut</a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection