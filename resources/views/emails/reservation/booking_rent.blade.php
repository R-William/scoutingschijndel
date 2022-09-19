@extends('emails.email_base')
@section('intro')
    Beste,<br />
    <br />
    Er heeft iemand contact opgenomen via de website, willen jullie het vanaf hier het vervolgproces oppakken?
@endsection

@section('context')
    <br />
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
