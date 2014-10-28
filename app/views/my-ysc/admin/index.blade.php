@extends('layout.my-ysc')

@section('title')
    Admin | MyYSC
@stop

@section('my-ysc-nav')
    @include('my-ysc.admin.nav')
@stop
@section('my-ysc-content')
    <h2>Admin Home</h2>
    <p class="lead">Welcome to myYSC!</p>
    <p>
        Here, you can manage families, set up contract billing, and more.
    </p>
@stop