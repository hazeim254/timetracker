@extends('layouts.app')

@section('header')
<h4 class="pull-left">{{$project->name}}</h4>
<div class="pull-right">
    <a href="{{ route('task.edit', $project) }} " class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
    <a href="{{ route('task.index') }} " class="btn btn-sm btn-primary"><i class="fa fa-chevron-left"></i></a>
</div>
@stop

@section('body')
@if ($project->description)
<div class="panel panel-default">
    <div class="panel-body">
        {!! nl2br(e($project->description)) !!}
    </div>
</div>
@endif

@if ($project->activity)
<section id="Project-Activity">
    <h3>Project Activity</h3>
    <div class="row">
       <div class="col-md-6 col-sm-9">
       <table class="table table-striped table-condensed table-bordered">
            @foreach ($project->activity as $activity => $time)
            <tr>
                <th>{{$activity}}</th>
                <td>{{format_time($time)}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</section>
@endif
@stop
