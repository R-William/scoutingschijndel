
Beste {{ $registration->sub_group->name }} stafleden,

Hieronder toegevoegd contact gegevens van een nieuw lid wat zich wilt aanmelden. Willen jullie het vervolgproces oppakken?

Het volgende lid is aangemeld op: {{ $registration->sub_date->format('d-m-Y') }} {{$registration->sub_date->toTimeString()}}<br />   
Naam: {{ $registration->name }}
Geboorte datum: {{ $registration->geb_date->format('d-m-Y') }}
Email: {{ $registration->email }}
Telefoon-nummer: {{ $registration->phone ?? "Niet opgegeven" }}
Opmerking: {{ $registration->comment ?? "Niet opgegeven" }}

Deze mail is automatisch opgemaakt en daarom niet ondertekend.