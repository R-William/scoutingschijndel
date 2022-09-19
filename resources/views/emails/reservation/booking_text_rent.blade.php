Beste,
Er heeft iemand contact opgenomen via de website, willen jullie het vanaf hier het vervolgproces oppakken?

Naam: {{ $reservation->name }}
Email: {{ $reservation->email }}
Telefoon-nummer: {{ $reservation->phone ?? "Niet opgegeven" }}
Organisatie: {{ $reservation->organisatie }}
Startdatum: {{ $reservation->start_date->format('d-m-Y') }}
Einddatum: {{ $reservation->end_date->format('d-m-Y') }}
Aantal leden: {{ $reservation->amount }}
Opmerking: {{ $reservation->comment ?? "Niet opgegeven" }}

Mochten er in die tussentijd nog algemene vragen zijn kunt u mailen naar website@scoutingschijndel.nl

Deze mail is automatisch opgemaakt en dus niet ondertekend.