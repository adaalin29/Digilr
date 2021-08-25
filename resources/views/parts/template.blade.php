<!DOCTYPE html>
<html>

<head>
  <base href="{{ URL::to('/') }}" />
  <title>{{setting('site.title')}}</title>
  <meta charset="utf-8" />
  <meta name="description" content="@yield('description')" />
  <meta name="keywords" content="@yield('keywords')" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- responsive use only -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="css/datepicker.min.css" rel="stylesheet" type="text/css" />
  <link href="css/aos.css" rel="stylesheet" type="text/css" />
  <link href="css/fancybox.css" rel="stylesheet" type="text/css" />
  <link href="css/checkbox.min.css" rel="stylesheet" type="text/css" />
  <!-- responsive use only -->
  <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
  @stack('styles')
</head>

<body>
  
  <div id="page" class = "@if(Request::path() != '/') grey @endif">
    <div class = "sidenav">
      <div class = "container">
        <div class = "close-part">
          <div class = "closenav"><img src = "images/closebtn.svg" class = "full-width"></div>
        </div>
        <div class = "sidenav-elements">
            <a href = "services" class = "sidenav-element @if(Request::path() == 'services') sidenav-element-active @endif">{{__('site.services')}}</a>
            <a href = "portofolio" class = "sidenav-element @if(Request::path() == 'portofolio') sidenav-element-active @endif">{{__('site.portofolio')}}</a>
            <a href = "team" class = "sidenav-element @if(Request::path() == 'team') sidenav-element-active @endif">{{__('site.team-sidenav')}}</a>
            <a href = "clients" class = "sidenav-element @if(Request::path() == 'clients') sidenav-element-active @endif">{{__('site.clients')}}</a>
            <a href = "work" class = "sidenav-element @if(Request::path() == 'work') sidenav-element-active @endif">{{__('site.work')}}</a>
            <a href = "contact" class = "sidenav-element @if(Request::path() == 'contact') sidenav-element-active @endif">{{__('site.contact')}}</a>
        </div>
        <div class = "sidenav-social">
        <a class = "sidenav-social-element" href = "{{settings('site.facebook')}}"><img src = "images/facebook.svg" class = "full-width"></a>
        <a class = "sidenav-social-element" href = "{{settings('site.instagram')}}"><img src = "images/instagram.svg" class = "full-width"></a>
        <a class = "sidenav-social-element" href = "{{settings('site.linkedin')}}"><img src = "images/linkedin.svg" class = "full-width"></a>
        </div>
      </div>
    </div>
    @include('parts.header')
    <div id="wrapper">
        <main id="content">
            @yield('content')
            <button class="scroll-up"> <img src="images/sagetica.svg"> </button>
        </main>
        @include('parts.footer')
    </div>
  </div>
  {{-- <button class="scroll-up"> <img src="images/arrow.png"> </button> --}}

  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/common.js" type="text/javascript"></script>
  <script src="js/datepicker.min.js" type="text/javascript"></script>
  <script src="js/datepicker.en.js" type="text/javascript"></script>
  
  <script src="js/aos.js" type="text/javascript"></script>
  <script src="js/notify.js" type="text/javascript"></script>
  <script src="js/swiper.min.js" type="text/javascript"></script>
  <script src="js/fancybox.js" type="text/javascript"></script>
  @stack('scripts')
</body>

</html>