@foreach ($acties as $actie)
    <div class="row">
        <div class="col-md-12">
            @if(empty($actie->img))
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>{{$actie->name}}</h2>
                            <p>{!!$actie->text!!}</p>                  
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-10">
                        <h2>{{$actie->name}}</h2>
                        <p>{!!$actie->text!!}</p>                  
                    </div>
                    <div class="col-md-2">
                        @if(empty($actie->link))
                            <img src="{{asset('')}}images/pages/acties/{{$actie->img}}" alt="{{$actie->name}}" class="img-fluid">
                        @else
                            <a href="{{$actie->link}}" target="_blank"><img src="{{asset('')}}images/pages/acties/{{$actie->img}}" alt="{{$actie->name}}" class="img-fluid"></a>
                        @endif
                        </div>
                </div>
            @endif
        </div>
    </div>
@endforeach