@extends('layout.master')

@section('title')
    Youth Skills Center - A Preschool and Childcare Center in Riverside, CA | Ages 2-14
@stop

@section('content')


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




@stop

@section('head')
@stop



@section('scripts')
@stop