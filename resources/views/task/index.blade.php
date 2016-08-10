@extends('layouts.app')

@section('header')
    <h4 class="pull-left">Task</h4>
    <a href="{{ route('task.create') }} " class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i></a>
@stop

@section('body')
    @if ($tasks->total())
        <table class="table table-condensed table-striped">
            <thead>
            <tr>
                <th>Project</th>
                <th>Activity</th>
                <th>Done at</th>
                <th>Time</th>
                <th class="col-md-2">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->project->name }}</td>
                        <td>{{ $task->activity->name }}</td>
                        <td>{{ $task->done_at->format('d/m/Y') }}</td>
                        <td>{{ $task->time }}</td>
                        <td>
                            <form action="{{ route('task.destroy', $task) }}" method="post">
                                {{csrf_field()}} {{method_field('delete')}}
                                <a class="btn btn-sm btn-primary" href="{{ route('task.edit', $task) }} "><i class="fa fa-edit"></i> Edit</a>
                                <button class="btn btn-sm btn-warning"><i class="fa fa-trash-o"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{$tasks->links()}}
    @else
        <div class="alert alert-info"><i class="fa fa-exclamation-circle"></i> <strong>No task found</strong></div>
    @endif
@stop
