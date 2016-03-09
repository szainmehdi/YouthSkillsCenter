@extends('layout.master')

@section('title')
    Resources For Parents
@stop

@section('content')
    <section id="for-parents">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="text-primary">Resources for Parents</h2>
                    <h4>School Events & Holidays</h4>
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
