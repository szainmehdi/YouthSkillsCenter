@extends('layout.basic')

@section('title')
    Log In to MyYSC
@stop

@section('content')
    <header>
        <div class="container">
            <section class="thin">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <h2 class="card-title">Log in to MyYSC</h2>
                        <form role="form" method="POST" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
                            <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                            <fieldset>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control input-lg" tabindex="1" placeholder="Email" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                                </div>
                                <div class="form-group">
                                <label for="password">
                                    Password
                                </label>
                                <input class="form-control input-lg" tabindex="2" placeholder="Password" type="password" name="password" id="password">
                                <p class="help-block text-right">
                                    <a href="{{{ URL::to('/users/forgot_password') }}}">Reset Password</a>
                                </p>
                                </div>
                                <div class="checkbox">
                                    <label for="remember">
                                        <input type="hidden" name="remember" value="0">
                                        <input tabindex="4" type="checkbox" name="remember" id="remember" value="1"> Keep me signed in
                                    </label>
                                </div>
                                @if (Session::get('error'))
                                    <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                                @endif

                                @if (Session::get('notice'))
                                    <div class="alert">{{{ Session::get('notice') }}}</div>
                                @endif
                                <div class="form-group text-center">
                                  <button type="submit" class="btn btn-primary btn-lg">Log In</button>
                                  <a href="{{ URL::to('myYSC/signup') }}" class="btn btn-info btn-lg">Sign Up</a>
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
    form label:not([for="remember"]) {
        display:none;
    }

</style>
@stop