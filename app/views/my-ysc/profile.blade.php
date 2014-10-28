@extends('layout.my-ysc')

@section('title')
    Edit your Profile | MyYSC
@stop

@section('my-ysc-nav')
    @include('my-ysc.nav')
@stop
@section('my-ysc-content')
    <h2>Profile</h2>
    <p class="lead">Edit your information.</p>

    {{ Form::open(['route' => 'users.updateProfile', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form']) }}
         @if (Session::get('error'))
            <div class="alert alert-error alert-danger">
                @if (is_array(Session::get('error')))
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if (Session::get('notice'))
            <div class="alert alert-success">{{ Session::get('notice') }}</div>
        @endif
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-5">
                <p class="form-control-static">{{ Auth::user()->email }}</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="first_name">First Name</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" placeholder="First Name" id="first_name" name="first_name" value="{{ Auth::user()->first_name }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="last_name">Last Name</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" placeholder="Last Name" id="last_name" name="last_name" value="{{ Auth::user()->last_name }}">
            </div>
        </div>
        <div class="form-actions form-group">
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
    {{ Form::close() }}
@stop