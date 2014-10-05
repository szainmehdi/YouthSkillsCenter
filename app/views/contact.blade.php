@extends('layout.master')

@section('title')
    About Youth Skills Center - A Preschool and Childcare Center in Riverside, CA | Ages 2-14
@stop
@section('content')

    <section class=" bg-primary thin" id="about">
        <div class="container text-justify">
            <div class="row">
                <h1 class="text-center" style="font-size: 380%;">We're here for you.</h1>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h2>
                        <i class="fa fa-phone"></i><br />
                    </h2>
                    <h3>
                        951.681.2972
                    </h3>
                </div>
                <div class="col-md-4">
                    <h2>
                        <i class="fa fa-envelope"></i><br />
                    </h2>
                    <h3 style="text-transform: none">
                        info@ysc5.com
                    </h3>
                </div>
                <div class="col-md-4">
                    <h2>
                        <i class="fa fa-fax"></i><br />
                    </h2>
                    <h3>
                        951.681.2971
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="thin">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="">Hours of Operation</h2>
                    <ul class="list-unstyled lead">
                        <li>
                            <strong>Monday &mdash; Friday: </strong>
                            <blockquote>6:00 am &mdash; 6:00 pm</blockquote>
                        </li>
                        <li>
                            <strong>Saturday &mdash; Sunday: </strong>
                            <blockquote class="text-muted">Closed</blockquote>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="">Location</h2>
                    <span class="lead"> <strong>Riverside Campus</strong></span>
                    <blockquote>
                        <span class="lead">
                            5111 Felspar Street,<br />
                            Riverside, CA 92509<br/>
                        </span>
                        <a href="https://www.google.com/maps/dir//Youth+Skills+Center+Childcare,+5111+Felpsar+St.,+Riverside,+CA+92509/" target="_blank"><i class="fa fa-road"></i> Driving Directions</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>



@stop

@section('head')
<style>
    .feature#objectives {
        background-image: url('/img/banners/goal_banner.jpg');
    }
</style>
@stop