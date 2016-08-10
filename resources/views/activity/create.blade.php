@extends('layouts.app')

@section('header')
    <h4 class="pull-left">Add Activity</h4>

    <a href="{{ route('activity.index') }}" class="btn btn-sm btn-default pull-right"><i class="fa fa-chevron-left"></i></a>
@stop

@section('body')
    {{ Form::open(['route' => 'activity.store']) }}

        @include('activity._form')

    {{ Form::close() }}
@stop
