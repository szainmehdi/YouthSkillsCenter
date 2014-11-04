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
                <div class="col-md-3 my-ysc-nav">
                    @yield('my-ysc-nav')

                    <a href="https://www.positivessl.com" style="margin-top: 24px;font-family: arial; font-size: 10px; color: #212121; text-decoration: none;display: block;text-align: center"><img src="https://www.positivessl.com/images-new/PositiveSSL_tl_white2.png" alt="SSL Certificate" title="SSL Certificate" border="0" /></a>
                </div>
                <div class="col-md-8 col-md-offset-1">
                    @yield('my-ysc-content')
                </div>
            </div>
        </div>
    </section>
@stop