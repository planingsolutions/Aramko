<!DOCTYPE html>
<html style="font-size: 16px;" lang="{{App::getLocale()}}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Aramko">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>@yield('tittle')</title>
    <link rel="stylesheet" href="{{asset('assets/css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('assets/css/Projects.css')}}" media="screen">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> 

<link rel="stylesheet" href="{{asset('assets/css/Home.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('assets/css/Contact.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('assets/css/Contact.css')}}">


<script class="u-script" type="text/javascript" src="{{asset('assets/js/nicepage.js')}}" defer=""></script>

<link type="image/x-icon" href="{{asset('assets/images/LOGO_-_Aramco_2-removebg-preview.png')}}" rel="icon">
    

    <link rel='stylesheet' href="{{asset('assets/css/style.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/plugins/superfish/css/superfish.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/plugins/dl-menu/component.css')}}" type='text/css' media='all' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel='stylesheet' href="{{asset('assets/plugins/font-awesome-new/css/font-awesome.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/plugins/fancybox/jquery.fancybox.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/plugins/flexslider/flexslider.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/css/style-responsive.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/css/style-custom.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/plugins/masterslider/public/assets/css/masterslider.main.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/css/master-custom.css')}}" type='text/css' media='all' />
        

    <link rel='stylesheet' href="{{asset('assets/css/ar/css/master-custom.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/css/ar/css/style-custom.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('assets/css/ar/css/style-responsive.css')}}" type='text/css' media='all' />




    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "{{asset('assets/images/LOGO_-_Aramco_2-removebg-preview.png')}}",
		"sameAs": []
    }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" dir="{{(App::getLocale()=='ar' ? 'rtl' : 'ltr')}}">
    <!-- start header -->
    <header  class="u-align-left u-clearfix u-header u-section-row-container" id="sec-37e9" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-section-rows">
        @include('Frontweb.includes.headerpag3')

    </header>
    <!-- end of header -->

    <!-- start body -->
      <section>
              @yield('content')
      </section>
    <!-- end bodyy -->

    <!-- Start Footer -->
        <footer class="footer-wrapper">
            @include('Frontweb.includes.footerpage3')
        </footer>
    <!-- end footer -->

    <script type='text/javascript' src="{{asset('assets/js/jquery/jquery.js')}}"></script>

<script type='text/javascript' src="{{asset('assets/js/jquery/jquery-migrate.min.js')}}"></script>


    
    <script type='text/javascript' src="{{asset('assets/js/jquery/jquery-migrate.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/superfish/js/superfish.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/js/hoverIntent.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/dl-menu/modernizr.custom.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/dl-menu/jquery.dlmenu.js')}}"></script>

    <script type='text/javascript' src="{{asset('assets/plugins/jquery.easing.js')}}"></script>
      <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.js"></script> -->


    <script type='text/javascript' src="{{asset('assets/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/fancybox/helpers/jquery.fancybox-media.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/flexslider/jquery.flexslider.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/jquery.isotope.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/masterslider/public/assets/js/masterslider.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/jquery.transit.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/plugins/gdlr-project/gdlr-portfolio-script.js')}}"></script>
    <script type='text/javascript' src="{{asset('assets/js/isotope.js')}}"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   

    <script src="{{asset('assets/js/main.js')}}"></script>


    <script>
      $(document).ready(function() {
          if (window.location.href.indexOf("ar") > -1) {
              document.documentElement.setAttribute("lang", 'ar');
          } else {
              document.documentElement.setAttribute("lang", 'en');
          }
      });
      $(document).ready(function() {
          $('.year').text(new Date().getFullYear());

    });
    
    </script>
</body>

</html>