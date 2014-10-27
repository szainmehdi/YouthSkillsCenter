<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Youth Skills Center Preschool & Child Care Center - Serving Riverside, Mira Loma, Jurupa Valley, and Eastvale.</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords"
          content="child care, preschool, day care, before school care, after school care, highscope curriculum,
            kindergarten readiness, pre-k, day care center, child care center, riverside, jurupa valley, eastvale,
            mira loma, inland empire, van buren, @yield('keywords')">

    <!-- Stylesheets -->
    <link href="/assets/css/main.css" rel="stylesheet">

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="/img/favicon/favicon_new2.ico" />

@yield('head')
</head>
<body class="@yield('body-class', 'normal')">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">
                    <img class="site-logo img-responsive visible-lg visible-md" src="/img/logos/site-logo-light-inverse.png" />
                    <img class="site-logo img-responsive hidden-lg hidden-md" src="/img/logos/site-logo-light-inverse-shortened.png" />
                    <span class="sr-only"> Youth Skills Center</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li @if(Route::currentRouteName() == 'home') class="hidden" @endif>
                        <a href="/">Home</a>
                    </li>
                    <li class="dropdown visible-sm visible-md">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li class="{{ set_link_active('preschool') }}">
                                <a href="/preschool">Preschool</a>
                            </li>
                            <li class="{{ set_link_active('school-age-care') }}">
                                <a href="/school-age-care">School-Age Care</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-sm hidden-md {{ set_link_active('preschool') }}">
                        <a href="/preschool">Preschool</a>
                    </li>
                    <li class="hidden-sm hidden-md {{ set_link_active('school-age-care') }}">
                        <a href="/school-age-care">School-Age Care</a>
                    </li>
                    <li class="{{ set_link_active('faqs') }}">
                        <a href="/frequently-asked-questions">FAQs</a>
                    </li>
                    <li class="{{ set_link_active('about') }}">
                        <a href="/about">About</a>
                    </li>
                    <li class="{{ set_link_active('contact') }}">
                        <a href="/contact">Contact</a>
                    </li>
                    <li class="login-nav-link {{ my_ysc_link_active(Route::current()->getUri()) }}">
                        <a href="/myYSC"><i class="fa fa-child"></i> myYSC</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content-prepend')

    @yield('content')

    @yield('content-append')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">&copy; 2014 - Youth Skills Center</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a target="_blank" href="https://plus.google.com/104544147610723533287/posts"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.facebook.com/youthskillscenter"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.youtube.com/youthskillscenter"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="tel:9516812972"><i class="fa fa-phone"></i></a></li>
                        <li><a href="mailto:info@ysc5.com"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="https://www.google.com/maps/dir//Youth+Skills+Center+Childcare,+5111+Felpsar+St.,+Riverside,+CA+92509/"><i class="fa fa-map-marker"></i></a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/vendor/classie.js"></script>
    <script src="/assets/js/vendor/jqBootstrapValidation.js"></script>
    <script src="/assets/js/etc/contact_me.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55661461-1', 'auto');
      ga('require', 'linkid', 'linkid.js');
      ga('send', 'pageview');

    </script>
@yield('scripts')

</body>
</html>