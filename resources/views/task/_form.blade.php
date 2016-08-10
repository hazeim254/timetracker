{{ csrf_field() }}

<section class="row">
    <div class="col-md-6">
        <div class="form-group {{$errors->has('project_id')? 'has-error' : ''}}">
            {{ Form::label('project_id', 'Project', ['class' => 'control-label']) }}
            {{ Form::select('project_id', App\Project::selectList('Select Project'), null, ['class' => 'form-control']) }}
            @if ($errors->has('project_id'))
            <div class="error-message">{{$errors->first('project_id')}}</div>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{$errors->has('activity_id')? 'has-error' : ''}}">
            {{ Form::label('activity_id', 'Activity', ['class' => 'control-label']) }}
            {{ Form::select('activity_id', App\Activity::selectList('Select Activity'), null, ['class' => 'form-control']) }}
            @if ($errors->has('activity_id'))
            <div class="error-message">{{$errors->first('activity_id')}}</div>
            @endif
        </div>
    </div>     
</section>

<section class="row">
    <div class="col-md-6">
        <div class="form-group {{$errors->has('done_at')? 'has-error' : ''}}">
            {{ Form::label('done_at', 'Date', ['class' => 'control-label']) }}
            {{ Form::date('done_at', null, ['class' => 'form-control']) }}
            @if ($errors->has('done_at'))
            <div class="error-message">{{$errors->first('done_at')}}</div>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group {{$errors->has('hours')? 'has-error' : ''}}">
            {{ Form::label('hours', 'Hours', ['class' => 'control-label']) }}
            {{ Form::text('hours', null, ['class' => 'form-control']) }}
            @if ($errors->has('hours'))
            <div class="error-message">{{$errors->first('hours')}}</div>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group {{$errors->has('minutes')? 'has-error' : ''}}">
            {{ Form::label('minutes', 'Minutes', ['class' => 'control-label']) }}
            {{ Form::text('minutes', null, ['class' => 'form-control']) }}
            @if ($errors->has('minutes'))
            <div class="error-message">{{$errors->first('minutes')}}</div>
            @endif
        </div>
    </div>
</section>

<div class="form-group {{$errors->has('description')? 'has-error' : ''}}">
    {{ Form::label('description', 'Description', ['class' => 'control-label']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
    @if ($errors->has('description'))
    <div class="error-message">{{$errors->first('description')}}</div>
    @endif
</div>


<div class="form-group">
    <button class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
</div>



