@extends('layouts.app')

@section('header')
    <h4 class="pull-left">Edit Task</h4>

    <form action="{{ route('task.destroy', $task)}}" class="pull-right" method="post">
        {{csrf_field()}} {{method_field('delete')}}
        <a href="{{ route('task.index')}}" class="btn btn-sm btn-default"><i class="fa fa-chevron-left"></i></a>
        <button class="btn btn-sm btn-warning" type="submit"><i class="fa fa-trash-o"></i></button>
    </form>
@stop

@section('body')
    {{ Form::model($task, ['route' => ['task.update', $task]]) }}

        {{ method_field('patch') }}

        @include('task._form')

    {{ Form::close() }}
@stop
