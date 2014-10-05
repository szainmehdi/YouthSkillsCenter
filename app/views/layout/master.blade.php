<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

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
                    <li class="{{ setActive('preschool') }}">
                        <a href="/preschool">Preschool</a>
                    </li>
                    <li class="{{ setActive('school-age-care') }}">
                        <a href="/school-age-care">School-Age Care</a>
                    </li>
                    <li class="{{ setActive('about') }}">
                        <a href="/about">About</a>
                    </li>
                    <li class="{{ setActive('contact') }}">
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    @yield('content')



    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-info highlighted-inline">Send us a message and we'll get back to you as soon as possible.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="contact-form" id="contactForm"  novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                                &nbsp;&nbsp;
                                <a href="/contact" class="btn btn-xl btn-default">Call Us</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

    @yield('scripts')

</body>
</html>