<nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('assets/images/logo/ROLMEN_BELY-01-removebg-preview.png')}}" class="logo-light" alt="logo">
            <img src="{{asset('assets/images/logo/ROLMEN_BELY-01-removebg-preview.png')}}"  class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item with-dropdown">
                <a href="{{url('')}}" class="dropdown-toggle nav__item-link active">{{__('translation.nav_home')}}</a></li>
            
              <li class="nav__item with-dropdown">
                <a href="#aboutLayout2" class="dropdown-toggle nav__item-link">{{__('translation.nav_About')}}</a></li>


                <li class="nav__item with-dropdown">
                <a href="#servicesLayout2" class="dropdown-toggle nav__item-link">{{__('translation.nav_services')}}</a> </li>
              
              <li class="nav__item with-dropdown">
                <a href="#portfolioCarousel" class="dropdown-toggle nav__item-link">{{__('translation.nav_industries')}}</a> </li>

              <li class="nav__item with-dropdown">
                <a href="#testimonialsLayout1" class="dropdown-toggle nav__item-link">{{__('translation.nav_reviews')}}</a> </li>
              
               
                      
              <li class="nav__item with-dropdown">
                <a href="#blogGrid" class="dropdown-toggle nav__item-link">{{__('translation.nav_blogs')}}</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i></li>

               
             
              
          </div><!-- /.navbar-collapse -->
          <div class="navbar-modules">
            <ul class="list-unstyled d-flex align-items-center modules__btns-list">
              <li><a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a></li>
              <li class="d-none d-lg-block"><a href="#contactLayout2"
                  class="btn btn__primary btn__bordered module__btn-request">
                  <span>{{__('translation.nav_Contact')}}</span><i class="icon-arrow-right"></i>
                </a></li>


                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                  <li>
                      <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                          {{ $properties['native'] }}
                      </a>
                  </li>
                @endforeach


           
   
              <!-- @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

<li class="d-none d-lg-block">
<a class="btn btn__primary btn__bordered module__btn-request" style="border: none;"
 hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
        @if($properties['native'] == "English")
            <span class="flag-icon flag-icon-us flag-icon-squared"></span>
        @elseif($properties['native'] == "العربية")
            <span class="flag-icon flag-icon-eg flag-icon-squared"></span>
        @endif
        {{ $properties['native'] }} </a>
</li>
@endforeach -->


          
<li class="d-none d-lg-block">
                <div class="module__btn module__btn-phone d-flex align-items-center">
                  <i class="icon-phone"></i>
                  <a href=""></a>
                </div>
              </li>
            </ul><!-- /.modules-wrapper -->
          </div><!-- /.navbar-modules -->


     

        </div><!-- /.container -->
      </nav><!-- /.navabr -->