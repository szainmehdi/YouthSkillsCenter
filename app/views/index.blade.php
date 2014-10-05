@extends('layout.master')

@section('title')
    Youth Skills Center - A Preschool and Childcare Center in Riverside, CA | Ages 2-14
@stop

@section('content')

    <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-heading">Preschool &amp; Childcare<br /><strong>for the 21st Century.</strong></div>
                    <a href="#scrolled" class="page-scroll btn btn-xl">Learn More</a>
                </div>
            </div>
        </header>

        <section class="thin" id="scrolled">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="lead"><strong>
                            As a new licensed preschool and childcare center in Riverside, CA, we're shaking things up!
                            Youth Skills Center provides an all-around great learning experience for your child at the lowest prices in the business!
                        </strong></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid Section -->
        <section id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="padding-bottom: 40px">
                        <h2 class="section-heading text-center">Our Programs</h2>
                        {{--<h3 class="section-subheading text-muted">Browse our specialized programs.</h3>--}}
                        <p class="lead">
                            At Youth Skills Center, we put your child above everything else. We do only what's
                            best for the students, and <strong>every hour at YSC is filled with enjoyable learning
                                experiences</strong> (except nap time, of course).
                        </p>
                        <p class="lead">
                            We have programs for <strong>children between the ages of 2 and 14</strong>, from Preschool to 8th Grade.
                            Each of our programs is tailored to best suit the age group. For example, <strong>YSC's Preschool
                                follows the HighScope curriculum and learning method</strong> to build a solid foundation for the
                            future of your child's education. Similarly, our School Age Care program provides the
                            <strong>necessary environment for your child to peacefully complete any schoolwork</strong>, as well as
                            one-on-one attention to provide any help or guidance that may be required.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 portfolio-item">
                        <a href="/preschool" class="portfolio-link">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/banners/Preschool_l.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Preschool &amp; Kindergarten Readiness</h4>
                            <p class="text-muted">Ages 2-5</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 portfolio-item">
                        <a href="/school-age-care" class="portfolio-link">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/banners/school-age-care.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Before &amp; After School Care</h4>
                            <p class="text-muted">Ages 5-14</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="thin">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="/img/banners/children.jpg" class="img-responsive"/>
                    </div>
                    <div class="col-md-7">
                        <h1 class="highlighted-heading">Now Enrolling for 2014-15.</h1>
                        <div class="clearfix"></div>
                        <p class="lead" style="margin-top: 16px;">
                        Call now for the best prices for the 2014-15 school year.
                        </p>
                        <a href="/contact" class="btn btn-xl">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="thin bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="highlighted-heading accent-one">We're always at the top of our game.</h1>
                        <div class="clearfix"></div>
                        <p class="lead" style="margin-top: 16px;">
                        Check out what our families have to say about us!
                        </p>
                        <ul class="list-inline" id="review-list">
                            <li><a href="https://plus.google.com/102809423592877433946/about?gl=US&hl=en-US">
                                <i class="fa fa-google-plus"></i>
                            </a></li>
                            <li><a href="http://www.yelp.com/biz/youth-skills-center-riverside">
                                <i class="fa fa-yelp"></i>
                            </a></li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img src="/img/banners/thumbs-up1.jpg" class="img-responsive img-rounded"/>
                    </div>

                </div>
            </div>
        </section>

        <section class="text-accent-three">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="/img/banners/child-hands_large.jpg" class="img-responsive"/>
                    </div>
                    <div class="col-md-7">
                        <h1 class="highlighted-heading accent-three">Unleash your child's potential.</h1>
                        <div class="clearfix"></div>
                        <p class="lead" style="margin-top: 16px;">
                            With the warm and welcoming environment at YSC, your child can reach their true potential.
                            And with the best prices of the year, now is the best time to join!
                        </p>
                        <a href="/contact" class="btn btn-xl accent-three">Explore our programs</a>
                    </div>
                </div>
            </div>
        </section>

@stop

@section('head')
<style>
    header {
        background-image: url('/img/gallery/YSC_MAIN_BLURRED_SMALL.jpg');
    }
</style>
@stop

@section('body-class')
    hero
@stop


@section('scripts')
    <script src="/assets/js/vendor/cbpAnimatedHeader.js"></script>
@stop