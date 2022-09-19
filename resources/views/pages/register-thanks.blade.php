@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @include('particles/inschrijven-thanks')
            </div>
            <div class="col-md-3 groups-items">
                @include('particles.groups')
            </div>
        </div>
    </div>
@endsection