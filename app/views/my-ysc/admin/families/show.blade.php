@extends('layout.my-ysc')

@section('title')
    {{ ($family->nickname) ?: $family->key }} | MyYSC
@stop

@section('my-ysc-nav')
    @include('my-ysc.admin.nav')
@stop
@section('my-ysc-content')
    <h2><a href="{{ URL::route('manage.families') }}"><i class="fa fa-arrow-circle-left"></i> Families</a></h2>
    {{--<div class="family-icon" style="background: {{ random_color($family->key) }}">{{ $family->key[0] }}</div>--}}
    <div class="family-heading-thick" style="background: {{ random_color($family->key) }}">
        @if($family->nickname)
            <p><strong>{{{ $family->nickname }}}</strong></p>
            <p><small>{{{ $family->key }}}</small></p>
        @else
            <p><a href="/myYSC/manage/families/{{ $family->id }}"><em>(No nickname)</em></a></p>
            <p><small>{{{ $family->key }}}</small></p>
        @endif
    </div>

    <p class="action-buttons">
        <a href="{{ URL::route('manage.families.edit',['id' => $family->id ]) }}" class="btn btn-info"><i class="fa fa-pencil"></i> &nbsp; Edit</a>
        <a href="{{ URL::route('manage.families.addChild',['id' => $family->id ]) }}" class="btn btn-info"><i class="fa fa-child"></i> &nbsp; Add Child</a>
    </p>
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
                    <a href="{{ URL::route('manage.families.editChild',['id' => $family->id, 'child_id' => $child->id ]) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> &nbsp; Edit</a>
                    <a href="{{ URL::route('manage.families.removeChild',['id' => $family->id, 'child_id' => $child->id  ]) }}" class="btn btn-danger bootbox-confirm"><i class="fa fa-trash"></i> &nbsp; Remove</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    @empty
        <div class="content-empty">No children associated with this family.</div>
    @endforelse

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
        <h3>Access Code</h3>
        <p>You can give this access code to a parent who wants to sign up for a new myYSC account.</p>
        <blockquote class="family-access-code">
            {{ number_format($family->access_code,0,'.','-') }}
        </blockquote>
    </section>
@stop