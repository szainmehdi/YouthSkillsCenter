@extends('layout.my-ysc')

@section('title')
    Add Family | MyYSC
@stop

@section('my-ysc-nav')
    @include('my-ysc.admin.nav')
@stop
@section('my-ysc-content')
    <h2><a href="{{ URL::route('manage.families') }}"><i class="fa fa-arrow-circle-left"></i> Families</a></h2>

    <h3>Edit {{ $family->key }}</h3>
    {{ Form::open(['method' => 'post', 'class' => 'form-horizontal', 'role' => 'form']) }}
        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">
                @if (is_array(Session::get('error')))
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif
        <div class="form-group">
            <label class="col-sm-2 control-label" for="family_key">Family Key</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" placeholder="TOR-2039" id="family_key" name="family_key" value="{{ $family->family_key }}" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="nickname">Nickname <small>(Optional)</small></label>
            <div class="col-sm-5">
                <input class="form-control" type="text" placeholder="The Torres Family" id="nickname" name="nickname" value="{{ $family->nickname }}" />
            </div>
        </div>
        <div class="form-actions form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ URL::route('manage.families.view', [$family->id]) }}" class="btn btn-default"><i class="fa fa-times"></i> &nbsp; Cancel</a>
            </div>
        </div>
    {{ Form::close() }}

@stop