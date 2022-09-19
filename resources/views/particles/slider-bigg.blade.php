<div id="carouselGroupIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($sliders as $index => $slider)
            @if($loop->first)
                <li data-target="#carouselGroupIndicators" data-slide-to="{{ $index }}" class="active"></li>
            @else
                <li data-target="#carouselGroupIndicators" data-slide-to="{{ $index }}"></li>
            @endif
        @endforeach
    </ol>
    <div class="carousel-group-inner">
        @foreach ($sliders as $slider)
            @if($loop->first)
                <div class="carousel-item active">
            @else
                <div class="carousel-item">
            @endif
                <div class="d-block w-100 slider-img" style="background-image: url('{{asset('')}}{{ $slider["image_location"] }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider["display_title"] }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Vorige</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Volgende</span>
    </a>
</div>
{{--<script type="text/javascript">$('.carousel').carousel({--}}
        {{--interval: 2000--}}
    {{--})</script>--}}