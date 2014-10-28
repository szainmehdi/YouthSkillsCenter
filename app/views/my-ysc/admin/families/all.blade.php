@extends('layout.my-ysc')

@section('title')
    Manage Families | MyYSC
@stop

@section('my-ysc-nav')
    @include('my-ysc.admin.nav')
@stop
@section('my-ysc-content')
    <h2>Families</h2>
    <p class="action-buttons">
        <a href="{{ URL::route('manage.families.create') }}" class="btn btn-info"><i class="fa fa-pencil"></i> &nbsp; Add Family</a>
    </p>
    @forelse($families as $family)
    <div class="family-card">
        <div class="card-icon" style="background: {{ random_color($family->key) }}">{{ $family->key[0] }}</div>
        <div class="card-content">
            <div class="col-xs-6">
                @if($family->nickname)
                    <p><strong>{{ $family->nickname }}</strong></p>
                    <p>{{ $family->key }}</p>
                @else
                    <p><em>(No nickname)</em></p>
                    <p>{{ $family->key }}</p>
                @endif
            </div>
            <div class="col-xs-6 text-right">
                <a href="{{ URL::route('manage.families.view',['id' => $family->id ]) }}" class="btn btn-success"><i class="fa fa-eye"></i> &nbsp; View</a>
                <a href="{{ URL::route('manage.families.edit',['id' => $family->id ]) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> &nbsp; Edit</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    @empty
        <div class="content-empty"><i class="fa fa-meh-o"></i> No families found.</div>
    @endforelse
@stop