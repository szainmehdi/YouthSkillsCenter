@extends('layout.my-ysc')

@section('title')
    Edit Child | MyYSC
@stop

@section('my-ysc-nav')
    @include('my-ysc.admin.nav')
@stop
@section('my-ysc-content')
    <h2><a href="{{ URL::route('manage.families') }}"><i class="fa fa-arrow-circle-left"></i> Families</a></h2>

    <h3>Edit {{ $child->first_name }} {{ $child->last_name }}</h3>
    {{ Form::open(['method' => 'post', 'class' => 'form-horizontal', 'role' => 'form']) }}
        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">
                @if (is_array(Session::get('error')))
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif
        <div class="form-group">
            <label class="col-sm-2 control-label" for="family_key">Add to Family</label>
            <div class="col-sm-5">
                <p class="form-control-static">{{ $family->key }}</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="first_name">First Name</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" placeholder="" id="first_name" name="first_name" value="{{ $child->first_name }}" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="last_name">Last Name</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" placeholder="" id="last_name" name="last_name" value="{{ $child->last_name }}" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="weekly_tuition">Tuition</label>
            <div class="col-sm-5">
                    <div class="input-group">
                        <div class="input-group-addon">$</div>
                        <input class="form-control" type="number" step="any" min="10" max="500" placeholder="" id="weekly_tuition" name="weekly_tuition" value="{{ $child->weekly_tuition }}" />
                    </div>
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