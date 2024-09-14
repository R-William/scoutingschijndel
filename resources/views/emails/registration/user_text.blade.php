Beste,
    
Bedankt voor uw getoonde interesse in de {{ $registration->sub_group->name }} van Scouting Schijndel. 

Uw gegevens zijn gedeeld met de {{ $registration->sub_group->name }}. Zij zullen binnekort contact op nemen over de vervolg stappen. Zij draaien normaal gesproken op {{ $registration->sub_group->date }} van {{ $registration->sub_group->start_time }} - {{ $registration->sub_group->end_time }}. 

Hieronder een samenvatting van de gegevens die gedeeld zijn met deze groep:
Naam: {{ $registration->name }}
Geboorte datum: {{ $registration->geb_date->format('d-m-Y') }}
Geslacht: {{ $registration->gender }}
Email: {{ $registration->email }}
Telefoon-nummer: {{ $registration->phone ?? "Niet opgegeven" }}
Opmerking: {{ $registration->comment ?? "Niet opgegeven" }}

Mochten er in die tussentijd nog algemene vragen zijn kunt u mailen naar website@scoutingschijndel.nl
Deze mail is automatisch opgemaakt en dus niet ondertekend.
