<div class="menu-container">
    <div class="menu">
        <a href="{{ route('home') }}" class="logo"><img src="/images/logos/Scouting_NL_logo.png"></a>
        <ul class="clearfix">
            <li class="single-item"><a href="/">Home</a></li>
            <li data-arrow="↓ "><a href="#">Groepen</a>
                <ul>
                    <li><a href="{{ route('group', ['group' => 'bevers']) }}">Bevers 5-7 jaar</a></li>
                    <li><a href="{{ route('group', ['group' => 'welpen']) }}">Welpen 7-10 jaar</a></li>
                    <li><a href="{{ route('group', ['group' => 'scouts']) }}">Scouts 10-14 jaar</a></li>
                    <li><a href="{{ route('group', ['group' => 'explorers']) }}">Explorers 14-18 jaar</a></li>
                    <li><a href="{{ route('group', ['group' => 'pivos']) }}">Pivos 18-24 jaar</a></li>
                    <li><a href="{{ route('group', ['group' => 'plusscouts']) }}">Plusscouts 24+ jaar</a></li>
                </ul>
            </li>
            <li data-arrow="↓ "><a href="#">Verhuur</a>
                <ul>
                    <li><a href="{{ route('verhuur.building') }}">Over ons gebouw</a></li>
                    <li><a href="{{ route('verhuur.surrounding') }}">Over onze omgeving</a></li>
                    <li><a href="{{ route('verhuur.calender') }}">Beschikbaarheid & boeken</a></li>
                    <li><a href="{{ route('verhuur.prices') }}">Tarieven en voorwaarden</a></li>
                </ul>
            </li>
            <li data-arrow="↓ "><a href="#">Over ons</a>
                <ul>
                    <li><a href="{{ route('about_us.general') }}">Algemeen</a></li>
                    <li><a href="{{ route('about_us.contact') }}">Contact</a></li>
                    <li><a href="{{ route('about_us.register_costs') }}">Lid worden & kosten</a></li>
                    <li><a href="{{ route('news') }}">Nieuws</a></li>
                    <li><a href="{{ route('actie') }}">Actie</a></li>
                </ul>
            </li>
            <li><a href="{{ route('first_time') }}" class="btn btn-warning">Kom kijken</a></li>
        </ul>
    </div>
</div>
