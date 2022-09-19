Beste,

Bedankt dat u contact hebt opgenomen met het verhuur van Scouting Schhijndel. 

Uw gegevens zijn gedeeld met de verhuurder. Zij zullen binnekort contact op nemen.

Hieronder een samenvatting van de gegevens die gedeeld zijn met de verhuurder:
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