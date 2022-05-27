<nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="background-color: rgba(161, 155, 155, 0.426);">
@foreach($website as $webbb)

<a href="{{url('')}}" class="u-image u-logo u-image-1" data-image-width="623" data-image-height="400">
    <img href="{{url('')}}"><img src="{{asset('public/img/'.$webbb->Images[0])}}" class="u-logo-image u-logo-image-1" style="position:relative; top:40px;">
</a>
@endforeach
           
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <!---->
                      <li class="nav-item active" style="padding: 10px;" >
                        <a class="nav-link" href="{{route('interiorde​sign')}}">{{__('translation.nav_home')}}<span class="sr-only">(current)</span></a>
                      </li>
                    <!---->
                    
                    <li class="nav-item" style="padding: 10px;" >
                        <a class="nav-link" href="#About">{{__('translation.nav_About')}}</a>
                    </li>
                    
                    <!---->
                     <li class="nav-item" style="padding: 10px;">
                    <a class="nav-link"  href="#Servicess">{{__('translation.nav_Services')}}</a>
                    </li>
                  <!---->
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