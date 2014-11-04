@extends('layout.my-ysc')

@section('title')
    Billing | MyYSC
@stop

@section('my-ysc-nav')
    @include('my-ysc.nav')
@stop

@section('my-ysc-content')
    <h2>Billing</h2>
    <p class="lead">Manage your weekly payment.</p>
    <section class="thin">
        <h3>Weekly Billing</h3>
        <div class="row">
            <div class="col-sm-4">
                <span class="wb">${{ number_format($family->totalWeeklyBilling(),2) }}/week</span>
            </div>
            <div class="col-sm-8 text-center">
                @if($family->isSignedUpForAutoPay())
                    <div class="alert alert-success">
                        <p>You're signed up for Auto-Pay!</p>
                        <br/>
                        <a href="{{ URL::route('users.cancelAutoPay') }}" class="btn btn-default bootbox-confirm">Cancel AutoPay</a>
                    </div>
                @else
                    <div class="alert alert-warning">
                        <p>You haven't signed up for AutoPay yet! <span class="fa fa-frown-o"></span></p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @if(!$family->isSignedUpForAutoPay())
        <h4>Sign Up for Auto Pay</h4>
        {{ Form::open(['id' => 'billing-form', 'route' => 'users.updateCard', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form']) }}

            @if (Session::get('error'))
                <div class="alert alert-error alert-danger">
                    @if (is_array(Session::get('error')))
                        {{ head(Session::get('error')) }}
                    @else
                        {{ Session::get('error') }}
                    @endif
                </div>
            @endif

            @if (Session::get('notice'))
                <div class="alert alert-notice">{{ Session::get('notice') }}</div>
            @endif

            <div class="alert alert-error alert-danger" style="display:none"></div>
            <div class="form-group">
                <label for="card-number" class="col-sm-2 control-label">Card Number</label>
                <div class="col-sm-5">
                    <input class="form-control" type="text" placeholder="Card Number" id="card-number" data-stripe="number">
                </div>
            </div>
            <div class="form-group">
                <label for="cvc" class="col-sm-2 control-label">CVC</label>
                <div class="col-sm-5">
                    <input class="form-control" type="text" placeholder="CVC" id="cvc" data-stripe="cvc">
                </div>

            </div>
            <div class="form-group">
                <label for="cvc" class="col-sm-2 control-label">Expiration</label>
                <div class="col-sm-3">
                    {{ Form::selectMonth(null,date('m'), ['class'=>'form-control', 'data-stripe' => 'exp-month'], '%m - %B') }}
                </div>
                <div class="col-sm-2">
                    {{ Form::selectYear(null, date('Y'), date('Y') + 10,  date('Y'), ['class'=>'form-control', 'data-stripe' => 'exp-year']) }}
                </div>
            </div>
            <div class="form-actions form-group">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>


        {{ Form::close() }}
    @endif



@stop

@section('scripts')
    <script src="https://js.stripe.com/v2/"></script>
    <script src="/assets/js/etc/billing.js"></script>
@stop

@section('head')
    <meta name="stripe-publishable-key" content="{{ Config::get('services.stripe.publishable') }}" />
    <style>
        .wb {
            font-size: 36px;
            color: green;
        }
    </style>
@stop