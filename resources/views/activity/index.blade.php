@extends('layouts.app')

@section('header')
    <h4 class="pull-left">Activity</h4>
    <a href="{{ route('activity.create') }} " class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i></a>
@stop

@section('body')
    @if ($activities->total())
        <table class="table table-condensed table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($activities as $activity)
                    <tr>
                        <td class="col-md-5"><a href="{{ route('activity.edit', $activity) }}">{{ $activity->name }}</a></td>
                        <td class="col-md-3">
                            <form action="{{ route('activity.destroy', $activity) }}" method="post">
                                {{csrf_field()}} {{method_field('delete')}}
                                <a class="btn btn-sm btn-primary" href="{{ route('activity.edit', $activity) }} "><i class="fa fa-edit"></i> Edit</a>
                                <button class="btn btn-sm btn-warning"><i class="fa fa-trash-o"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $activities->links() }}
    @else
        <div class="alert alert-info"><i class="fa fa-exclamation-circle"></i> <strong>No activity found</strong></div>
    @endif
@stop
