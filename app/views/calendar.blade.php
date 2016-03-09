@extends('layout.master')

@section('title')
    Events & Holidays
@stop

@section('content')
    <section id="for-parents">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>School Events & Holidays</h2>
                    <br>
                    <div data-tockify-component="calendar" data-tockify-calendar="youthskillscenter"></div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('head')
<style>
    #for-parents {
        padding-top: 50px;
    }
</style>
@stop


@section('scripts')
    <script src="/assets/js/vendor/cbpAnimatedHeader.js"></script>
    <script data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>
@stop
