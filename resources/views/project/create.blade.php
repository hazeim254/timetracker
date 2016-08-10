@extends('layouts.app')

@section('header')
    <h4 class="pull-left">Add Project</h4>

    <a href="{{ route('project.index') }}" class="btn btn-sm btn-default pull-right"><i class="fa fa-chevron-left"></i></a>
@stop

@section('body')
    {{ Form::open(['route' => 'project.store']) }}

        @include('project._form')

    {{ Form::close() }}
@stop
