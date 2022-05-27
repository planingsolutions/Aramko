<nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="background-color: white;">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarsExample09">
          @foreach($website as $webbb)

<a href="{{url('')}}" class="u-image u-logo u-image-1" data-image-width="623" data-image-height="400">
    <img href="{{url('')}}"><img src="{{asset('public/img/'.$webbb->Images[0])}}" class="u-logo-image u-logo-image-1" style="position:relative; top:40px;">
</a>
@endforeach
              <ul class="navbar-nav mr-auto">
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item dropdown" style="padding: 10px;">
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                    @endforeach
              </ul>
            </div> 
      </nav>