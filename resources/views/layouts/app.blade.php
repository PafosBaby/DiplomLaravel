<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <title>Novella</title>
    <meta charset="utf-8">

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link rel="stylesheet" media="screen" href="{{asset('assets/js/bootstrap/bootstrap.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/js/mainmenu/menu.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/layouts.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/shortcodes.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/css/responsive-leyouts.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/js/masterslider/style/masterslider.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/css/Simple-Line-Icons-Webfont/simple-line-icons.css')}}" media="screen"/>
    <link rel="stylesheet" href="{{asset('assets/css/et-line-font/et-line-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/smart-forms/smart-forms.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/cubeportfolio/cubeportfolio.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Style.css')}}"/>


    <!-- Remove the below comments to use your color option -->
    {{--    <link rel="stylesheet" href="assets/css/colors/lightblue.css" />--}}
    {{--    <link rel="stylesheet" href="assets/css/colors/orange.css" />--}}
    {{--    <link rel="stylesheet" href="assets/css/colors/green.css" />--}}
    {{--    <link rel="stylesheet" href="assets/css/colors/pink.css" />--}}
       {{-- <link rel="stylesheet" href="{{asset("assets/css/colors/red.css")}}" /> --}}
    {{--    <link rel="stylesheet" href="assets/css/colors/purple.css" />--}}
    {{--    <link rel="stylesheet" href="assets/css/colors/bridge.css" />--}}
    {{--    <link rel="stylesheet" href="assets/css/colors/yellow.css" />--}}
    {{--    <link rel="stylesheet" href="assets/css/colors/violet.css" />--}}
    {{--    <link rel="stylesheet" href="assets/css/colors/cyan.css" />--}}
    {{--    <link rel="stylesheet" href="assets/css/colors/mossgreen.css" />--}}

</head>

<body>
<div class="site_wrapper">

    @include('layouts.app-templates.header')
    @yield('content')
    @include('layouts.app-templates.footer')
    <a href="#" class="scrollup red-4"></a><!-- end scroll to top of the page-->
</div>
<!-- end site wraper -->
<!-- ============ JS FILES ============ -->

<script type="text/javascript" src="{{asset('assets/js/universal/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.min.css')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/masterslider/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/js/masterslider/masterslider.min.js')}}"></script>
<script type="text/javascript">
    (function ($) {
        "use strict";
        var slider = new MasterSlider();
        // adds Arrows navigation control to the slider.
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider', {
            width: 1600,    // slider standard width
            height: 630,   // slider standard height
            space: 0,
            speed: 45,
            layout: 'fullwidth',
            loop: true,
            preload: 0,
            autoplay: true,
            view: "parallaxMask"
        });

    })(jQuery);
</script>
<script src="{{asset('assets/js/mainmenu/customeUI.js')}}"></script>
<script src="{{asset('assets/js/scrolltotop/totop.js')}}"></script>
<script type="text/javascript" src="{{asset("assets/js/cubeportfolio/jquery.cubeportfolio.min.js")}}"></script>
<script src="{{asset('assets/js/mainmenu/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/pagescroll/animatescroll.js')}}"></script>

<script src="{{asset('assets/js/scripts/functions.js')}}" type="text/javascript"></script>
</body>
</html>
