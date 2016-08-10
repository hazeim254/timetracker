@extends('layouts.app')

@section('header')
    <h4 class="pull-left">Edit Activity</h4>

    <form action="{{ route('activity.destroy', $activity)}}" class="pull-right" method="post">
        {{csrf_field()}} {{method_field('delete')}}
        <a href="{{ route('activity.index')}}" class="btn btn-sm btn-default"><i class="fa fa-chevron-left"></i></a>
        <button class="btn btn-sm btn-warning" type="submit"><i class="fa fa-trash-o"></i></button>
    </form>
@stop

@section('body')
    {{ Form::model($activity, ['route' => ['activity.update', $activity]]) }}

        {{ method_field('patch') }}

        @include('activity._form')

    {{ Form::close() }}
@stop
