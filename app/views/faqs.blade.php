@extends('layout.master')

@section('title')
    Frequenty Asked Questions in Preschool & Child Care
@stop

@section('content')
    <header>
        <div class="container">
            <div class="intro-text text-left">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-heading highlighted-heading accent-five">FAQs</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p class="lead highlighted-inline accent-translucent-dark">
                            Selecting a preschool and child care center for your children is not an easy task and
                            requires lots of questions to be asked. We've collected the best & most frequently asked
                            questions to help make your decision as easy as possible.
                        </p>
                    </div>
                </div>
                <a href="#scrolled" class="page-scroll btn btn-xl accent-five">Learn More</a>
            </div>
        </div>
    </header>

    <section id="scrolled" class="thin bg-accent-five">
        <div class="container text-center quick-facts">
            <div class="row">
                <h2>Quick Facts</h2>

                <div class="fact-item col-md-3">
                    <small>License</small><br />
                    #33-4840337
                </div>
                <div class="fact-item col-md-3">
                    <small>Hours</small><br />
                    6am &mdash; 6pm
                </div>
                <div class="fact-item col-md-3">
                    <small>Ages Served</small><br />
                    2 &mdash; 14
                </div>
                <div class="fact-item col-md-3">
                    <small>We Are</small><br />
                    Family Owned<br />
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 faqs">
                    <h3 class="text-accent-five">Is Youth Skills Center a licensed child care center?</h3>
                    <blockquote>
                        Yes! Youth Skills Center is licensed by the <a href="http://ccld.ca.gov/" target="_blank">
                        Community Care Licensing Department of the State of California</a>.
                    </blockquote>
                    <h3 class="text-accent-five">Do you provide hot lunches?</h3>
                    <blockquote>
                        We offer a hot lunch program with a healthy nutritional balance. Currently, this program is
                        offered at a small additional weekly cost of $10 per week, unless enrolled in a full-time program.
                    </blockquote>
                    <h3 class="text-accent-five">Do you offer transportation to and from school?</h3>
                    <blockquote>
                        In <a href="/school-age-care">our school age program</a>, Youth Skills Center provides
                        transportation to and from school <strong>at no additional cost!</strong> We currently serve
                        several schools in the <a href="http://www.jusd.k12.ca.us/default.aspx" target="_blank">Jurupa
                        Unified School District</a>. Please <a href="/contact">contact us to verify</a> that we serve
                        your child's school.
                    </blockquote>
                    <h3 class="text-accent-five">Is Youth Skills Center a franchised center?</h3>
                    <blockquote>
                        Nope! Youth Skills Center is a <strong>local, family-owned child care center.</strong>
                    </blockquote>
                    <h3 class="text-accent-five">Do your teachers provide homework help?</h3>
                    <blockquote>
                        Absolutely! Students have plenty of time to work on their homework when they arrive at Youth
                        Skills Center, and our staff takes care to assist each child with their homework in an engaging,
                        thought-provoking manner.
                    </blockquote>
                    <h3 class="text-accent-five">Do you offer financial aid or subsidized care opportunities?</h3>
                    <blockquote>
                        We're strong believers that every family should have access to affordable child care services. 
                        At Youth Skills Center, we accept the several subsidized care programs, including
                        <a href="http://dpss.lacounty.gov/dpss/calworks/childcare.cfm" target="_blank">CalWORKs Child
                        Care Program</a>, <a href="http://rccfc.org/aboutus.htm" target="_blank">First 5</a>, and more. To get started with subsidized care programs,
                        contact the <a href="http://www.cdss.ca.gov/cdssweb/PG78.htm" target="_blank">Department of Social Services</a>. They will help you get the best subsidy program quickly
                        and easily.
                    </blockquote>
                    <h3 class="text-accent-five">What programs do you offer?</h3>

                    <!-- Portfolio Grid Section -->
                    <section id="portfolio" class="thin">
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
                    </section>
                </div>
            </div>
        </div>
    </section>


@stop

@section('head')
<style>
    header {
        /*background-image: url('/img/backgrounds/depositphotos_51573671-Boy-raising-hand-at-workplace-with-classmates.jpg');*/
        /*background-image: url('/img/backgrounds/depositphotos_6217980-Clever-students-in-classroom-raising-hand.jpg');*/
        /*background-image: url('/img/backgrounds/depositphotos_6217898-Kids-student-clever-girls-in-classroom-raising-hand.jpg');*/
        background-image: url('/img/backgrounds/faqs_background.jpg');
    }
    .feature#swimming {
        background-image: url('/img/banners/banner-2.jpg');
    }
    .faqs h3 {
        margin-top: 60px;
    }
</style>
@stop


@section('scripts')
    <script src="/assets/js/vendor/cbpAnimatedHeader.js"></script>
@stop