@extends('emails.email_base')
@section('intro')
    Beste,<br />
    <br />
    Er heeft iemand contact opgenomen via de website, willen jullie het vanaf hier het vervolgproces oppakken?
@endsection

@section('context')
    <b>Naam:</b> {{ $contact->name }}<br />
    <b>Email:</b> {{ $contact->email }}<br />
    <b>Telefoon-nummer:</b> {{ $contact->phone ?? "Niet opgegeven" }}<br />
    <b>Organisatie:</b> {{ $contact->organisatie }}<br />
    <b>Opmerking:</b> {{ $contact->comment ?? "Niet opgegeven" }}<br />
@endsection

@section('close')
<br />
Mochten er in die tussentijd nog algemene vragen zijn kunt u mailen naar <a href="mailto:website@scoutingschijndel.nl">website@scoutingschijndel.nl</a><br />
Deze mail is automatisch opgemaakt en dus niet ondertekend.
@endsection
