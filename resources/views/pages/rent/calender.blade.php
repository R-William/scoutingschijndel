@extends('app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        Ons rookvrije gebouw verhuren wij <b>uitsluitend</b> voor scouting activiteiten en activiteiten van andere jeugdverenigingen. <br />
        De beschikbaarheid van het gebouw is in de agenda op deze pagina te bekijken. Mocht u vragen hebben neem gerust contact op via het contact formulier. Wilt u nu direct reserveren reserveer dan via het reserveringsformulier.

        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-6">
            
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="information-tab" data-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="true">Contact</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="false">Huren</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                    @include('particles.rent.contact')
                </div>
                <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                    @include('particles.rent.book')
                </div>
            </div>
        </div>
        <div class="col-md-6">
            @include('particles.rent.calender')
        </div>
    </div>
@endsection