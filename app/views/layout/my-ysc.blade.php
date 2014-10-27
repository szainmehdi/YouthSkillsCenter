@extends('layout.basic')

@section('content-prepend')
    <header id="my-ysc-header">
        <div class="container">
            <div class="intro-text text-left">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-heading highlighted-heading"><i class="fa fa-child"></i> myYSC</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="my-ysc-content thin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="{{ set_link_active('users.home') }}">
                            <a href="/myYSC/"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="{{ set_link_active('users.profile') }}">
                            <a href="/myYSC/profile"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li class="{{ set_link_active('users.billing') }}">
                            <a href="/myYSC/billing"><i class="fa fa-dollar"></i> Billing</a>
                        </li>
                        <li>
                            <a href="/myYSC/logout"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 col-md-offset-1">
                    @yield('my-ysc-content')
                </div>
            </div>
        </div>
    </section>
@stop