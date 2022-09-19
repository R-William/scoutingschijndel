@extends('emails.email_base')
@section('intro')
    Beste,<br />
    <br />
    Bedankt dat u contact hebt opgenomen met het verhuur van Scouting Schhijndel. 
@endsection

@section('context')
    Uw gegevens zijn gedeeld met de verhuurder. Zij zullen binnekort contact op nemen.
    <br />    
    Hieronder een samenvatting van de gegevens die gedeeld zijn met de verhuurder:<br />
    <b>Naam:</b> {{ $reservation->name }}<br />
    <b>Email:</b> {{ $reservation->email }}<br />
    <b>Telefoon-nummer:</b> {{ $reservation->phone ?? "Niet opgegeven" }}<br />
    <b>Organisatie:</b> {{ $reservation->organisatie }}<br />
    <b>Startdatum:</b> {{ $reservation->start_date->format('d-m-Y') }}<br />
    <b>Einddatum:</b> {{ $reservation->end_date->format('d-m-Y') }}<br />
    <b>Aantal leden:</b> {{ $reservation->amount }}<br />
    <b>Opmerking:</b> {{ $reservation->comment ?? "Niet opgegeven" }}<br />
@endsection

@section('close')
<br />
Mochten er in die tussentijd nog algemene vragen zijn kunt u mailen naar <a href="mailto:website@scoutingschijndel.nl">website@scoutingschijndel.nl</a><br />
Deze mail is automatisch opgemaakt en dus niet ondertekend.
@endsection
