@extends('emails.email_base')
@section('intro')
    Beste {{ $registration->sub_group->name }},<br />
    <br />
    Hieronder toegevoegd contact gegevens van een nieuw lid wat zich wilt aanmelden. Willen jullie het vervolgproces oppakken?
@endsection

@section('context')
    Het volgende lid is aangemeld op: {{ $registration->sub_date->format('d-m-Y H:m:s') }}<br />
    <b>Naam:</b> {{ $registration->name }}<br />
    <b>Geboorte datum:</b> {{ $registration->geb_date->format('d-m-Y') }}<br />
    <b>Geslacht:</b> {{ $registration->gender }}<br />
    <b>Email:</b> {{ $registration->email }}<br />
    <b>Telefoon-nummer:</b> {{ $registration->phone ?? "Niet opgegeven" }}<br />
    <b>Opmerking:</b> {{ $registration->comment ?? "Niet opgegeven" }}<br />
@endsection

@section('close')
Deze mail is automatisch opgemaakt en daarom niet ondertekend.<br />
@endsection
