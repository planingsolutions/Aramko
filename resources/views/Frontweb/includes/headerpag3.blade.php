<nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="padding: 0.5rem 2rem !important;
    width: 100vw;
    box-shadow: 8px 8px 9px -12px;
    z-index: 999;
    position: fixed;
    background-color:white !important;">
      <a class="navbar-brand menu">
                                @foreach($socialmedia as $webbb)
                                    <a href="{{url('')}}">
                                        <img src="{{asset('public/img/'.$webbb->Images[0])}}" style="width: 150px; height: 80px;" class="logo">
                                        
                                    </a>
                                @endforeach
                             <button class="navbar-toggler dots" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                    </a>
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto" style="margin: auto;">
                    <!---->
                      <li class="nav-item active" style="padding: 10px;" >
                        <a class="nav-link u-text-hover-custom-color-1" href="{{url(' ')}}">{{__('translation.nav_home')}}<span class="sr-only">(current)</span></a>
                      </li>
                    <!---->
                    
                    <li class="nav-item" style="padding: 10px;" >
                        <a class="nav-link" href="#sec-9d5f">{{__('translation.nav_About')}}</a>
                    </li>
                    
                    <!---->
                     <li class="nav-item" style="padding: 10px;">
                    <a class="nav-link"   href="#carousel_f5fb">{{__('translation.nav_Services')}}</a>
                    </li>
                  <!---->
                  <li class="nav-item" style="padding: 10px;">
                    <a class="nav-link"  href="{{route('Projects')}}">{{__('translation.nav_Projects')}}</a>
                    </li>

                  <!--  -->

                  <li class="nav-item" style="padding: 10px;">
                    <a class="nav-link"  href="#carousel_782e">{{__('translation.nav_Contact')}}</a>
                    </li>

                  <!--  -->
                  <li class="nav-item" style="padding: 10px;">
                    <a class="nav-link" href="{{route('jobs')}}">{{__('translation.nav_joinus')}}</a>
                    </li>
                </ul>
                <ul  class="navbar-nav">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      <li class="nav-item dropdown" style="padding: 10px;">
                          <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" style="border: 1px solid red;
    padding: 6px 18px;
    background-color: red;
    color: white !important;
    border-radius: 44px;
    /* top: 4px; */
    padding-top: 3px !important;
    font-size: 14.5px;
}">
                              {{ $properties['native'] }}
                          </a>
                      </li>
                    @endforeach
                    
                </ul>
              
            </div>
    </nav>





