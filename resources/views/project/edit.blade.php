@extends('layouts.app')

@section('header')
    <h4 class="pull-left">Edit Project</h4>

    <form action="{{ route('project.destroy', $project)}}" class="pull-right" method="post">
        {{csrf_field()}} {{method_field('delete')}}
        <a href="{{ route('project.show', $project)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
        <button class="btn btn-sm btn-warning" type="submit"><i class="fa fa-trash-o"></i></button>
        <a href="{{ route('project.index')}}" class="btn btn-sm btn-default"><i class="fa fa-chevron-left"></i></a>
    </form>
@stop

@section('body')
    {{ Form::model($project, ['route' => ['project.update', $project]]) }}

        {{ method_field('patch') }}

        @include('project._form')

    {{ Form::close() }}
@stop
