@extends('layout.my-ysc')

@section('title')
    Billing | MyYSC
@stop

@section('my-ysc-content')
    <h2>Billing</h2>
    <p class="lead">Manage your weekly payment.</p>

    {{ Form::open(['id' => 'billing-form', 'route' => 'users.updateCard', 'method' => 'post']) }}
        <div class="alert alert-error alert-danger" style="display:none"></div>
        <div class="form-group">
            <label for="card-number" class="col-sm-2 control-label">Card Number</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" placeholder="Card Number" id="card-number" data-stripe="number">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label for="cvc" class="col-sm-2 control-label">CVC</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" placeholder="CVC" id="cvc" data-stripe="cvc">
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="form-group">
            <label for="cvc" class="col-sm-2 control-label">Expiration</label>
            <div class="col-sm-3">
                {{ Form::selectMonth(null,date('m'), ['class'=>'form-control', 'data-stripe' => 'exp-month'], '%m - %B') }}
            </div>
            <div class="col-sm-2">
                {{ Form::selectYear(null, date('Y'), date('Y') + 10,  date('Y'), ['class'=>'form-control', 'data-stripe' => 'exp-year']) }}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-actions form-group">
            <button type="submit" class="btn btn-primary">Update Credit Card</button>
        </div>
    {{ Form::close() }}
@stop

@section('scripts')
    <script src="https://js.stripe.com/v2/"></script>
    <script src="/assets/js/etc/billing.js"></script>
@stop

@section('head')
    <meta name="stripe-publishable-key" content="{{ Config::get('stripe.publishable_key') }}" />
@stop