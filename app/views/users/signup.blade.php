@extends('layout.basic')

@section('title')
    Sign Up for MyYSC
@stop

@section('content')
    <header>
        <div class="container">
            <section class="thin">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <h2 class="card-title">Sign Up for MyYSC</h2>
                        <form method="POST" action="{{{ URL::to('users') }}}" accept-charset="UTF-8">
                            <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                            <fieldset>
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input class="form-control input-lg" placeholder="First Name" type="text" name="first_name" id="first_name" value="{{{ Input::old('first_name') }}}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input class="form-control input-lg" placeholder="Last Name" type="text" name="last_name" id="last_name" value="{{{ Input::old('last_name') }}}">
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
                                    <input class="form-control input-lg" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                                    <input class="form-control input-lg" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
                                    <input class="form-control input-lg" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
                                </div>
                                <hr />
                                <p>You need an access code to sign up. <a href="/contact">Contact us</a> for more information.</p>
                                <div class="form-group">
                                    <label for="access_code">Access Code<small>(123-456-789)</small></label>
                                    <input class="form-control input-lg" placeholder="Access Code" type="text" name="access_code" id="access_code" value="{{{ Input::old('access_code') }}}">
                                </div>

                                @if (Session::get('error'))
                                    <div class="alert alert-error alert-danger">
                                        @if (is_array(Session::get('error')))
                                            {{ head(Session::get('error')) }}
                                        @endif
                                    </div>
                                @endif

                                @if (Session::get('notice'))
                                    <div class="alert">{{ Session::get('notice') }}</div>
                                @endif

                                <div class="form-actions form-group">
                                  <button type="submit" class="btn btn-primary center-block btn-xl">Create Your Account</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
        </div>
    </header>
@stop

@section('head')
<style>
    header {
        background-image: url('/img/backgrounds/myYSC_background_edited.jpg');
        padding: 25px 0;
    }
    form label {
        display:none;
    }

</style>
@stop