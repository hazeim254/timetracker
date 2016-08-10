@extends('layouts.app')

@section('header')
    <h4 class="pull-left">Add Task</h4>

    <a href="{{ route('task.index') }}" class="btn btn-sm btn-default pull-right"><i class="fa fa-chevron-left"></i></a>
@stop

@section('body')
    {{ Form::open(['route' => 'task.store']) }}

        @include('task._form')

    {{ Form::close() }}
@stop
