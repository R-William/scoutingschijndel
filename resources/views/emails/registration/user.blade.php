@extends('emails.email_base')
@section('intro')
    Beste,<br />
    <br />
    Bedankt voor uw getoonde interesse in de {{ $registration->sub_group->name }} van Scouting Schijndel. 
@endsection

@section('context')
    Uw gegevens zijn gedeeld met de {{ $registration->sub_group->name }}. Zij zullen binnekort contact op nemen over de vervolg stappen. Zij draaien normaal gesproken op {{ $registration->sub_group->date }} van {{ $registration->sub_group->start_time }} - {{ $registration->sub_group->end_time }}. 
    Meer informatie over deze groep vind u <a href="{{ route('group', ['group' => $registration->sub_group->group->name]) }}">hier</a>.<br />
    <br />    
    Hieronder een samenvatting van de gegevens die gedeeld zijn met deze groep:<br />
    <b>Naam:</b> {{ $registration->name }}<br />
    <b>Geboorte datum:</b> {{ $registration->geb_date->format('d-m-Y') }}<br />
    <b>Geslacht:</b> {{ $registration->gender }}<br />
    <b>Email:</b> {{ $registration->email }}<br />
    <b>Telefoon-nummer:</b> {{ $registration->phone ?? "Niet opgegeven" }}<br />
    <b>Opmerking:</b> {{ $registration->comment ?? "Niet opgegeven" }}<br />
@endsection

@section('close')
<br />
Mochten er in die tussentijd nog algemene vragen zijn kunt u mailen naar <a href="mailto:website@scoutingschijndel.nl">website@scoutingschijndel.nl</a><br />
Deze mail is automatisch opgemaakt en dus niet ondertekend.
@endsection
