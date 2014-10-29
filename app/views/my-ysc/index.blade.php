@extends('layout.my-ysc')

@section('title')
    Dashboard | MyYSC
@stop

@section('my-ysc-nav')
    @include('my-ysc.nav')
@stop
@section('my-ysc-content')
    <h2>Home</h2>
    <div class="family-heading-thick" style="background: {{ random_color($family->key) }}">
        @if($family->nickname)
            <p><strong>{{{ $family->nickname }}}</strong></p>
            <p><small>{{{ $family->key }}}</small></p>
        @else
            <p><a href="/myYSC/manage/families/{{ $family->id }}"><em>(No nickname)</em></a></p>
            <p><small>{{{ $family->key }}}</small></p>
        @endif
    </div>

    <section class="thin">
        <h3>Weekly Billing</h3>
        <div class="row">
            <div class="col-sm-4">
                <span class="wb">${{ number_format($family->totalWeeklyBilling(),2) }}/week</span>
            </div>
            <div class="col-sm-8 text-right">
                @if($family->isSignedUpForAutoPay())
                    <a href="{{ URL::route('users.billing') }}" class="btn btn-xl">Manage AutoPay</a>
                @else
                    <a href="{{ URL::route('users.billing') }}" class="btn btn-xl">Sign Up for AutoPay</a>
                @endif
            </div>
        </div>
    </section>

    <section class="thin">
    <h3>Children</h3>

    @forelse($family->children as $child)
        <div class="family-card">
            <div class="card-icon" style="background: {{ random_color($child->first_name) }}">{{{ $child->first_name[0] }}}</div>
            <div class="card-content">
                <div class="col-xs-6">
                    <p><strong>{{{ $child->name }}}</strong></p>
                    <p>${{ number_format($child->weekly_tuition, 2) }}/week</p>
                </div>
                <div class="col-xs-6 text-right">
{{--                    <a href="{{ URL::route('manage.families.editChild',['id' => $family->id, 'child_id' => $child->id ]) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> &nbsp; Edit</a>--}}
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    @empty
        <div class="content-empty">No children associated with this family.</div>
    @endforelse
    </section>

    <section class="thin">
        <h3>Users with Access</h3>
        <p>These users have access to {{{ $family->key }}}.</p>
        @forelse($family->users as $user)
            <div class="family-card">
                <div class="card-icon" style="background: {{ random_color($user->name) }}">{{ $user->first_name[0] }}</div>
                <div class="card-content">
                    <div class="col-xs-12">
                        <p><strong>{{{ $user->name }}}</strong></p>
                        <p>{{ mailto($user->email) }}</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        @empty
            <div class="content-empty">No users currently have access to this family.</div>
        @endforelse
    </section>


    <section class="thin">
        <h3>Single-Use Access Code</h3>
        <p class="">Share this access code to allow another person to create an account at YSC. This will <strong>only allow one person to create an account.</strong></p>
        <div class="alert alert-error alert-danger"><strong>Only share this access code with people you trust.</strong></div>
        <blockquote class="family-access-code">
            {{ number_format($family->access_code,0,'.','-') }}
        </blockquote>
    </section>
@stop

@section('head')
<style>
    .wb {
        font-size: 48px;
        color: green;
    }
</style>
@stop