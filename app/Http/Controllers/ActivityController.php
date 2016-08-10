<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    protected $rules = ['name' => 'required'];

    public function index()
    {
        $activities = Activity::paginate();

        return view('activity.index', compact('activities'));
    }

    public function create()
    {
        return view('activity.create');
    }

    public function store(Request $request)
    {
        $this->validates($request, 'Could not save activity');

        $activity = new Activity($request->all());
        $activity->user_id = \Auth::id();
        $activity->save();

        flash('Activity has been saved', 'success');

        return \Redirect::route('activity.index');
    }

    public function show(Activity $activity)
    {
        return view('activity.show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
        return view('activity.edit', compact('activity'));
    }

    public function update(Activity $activity, Request $request)
    {
        $this->validates($request, 'Could not save activity');

        $activity->update($request->all());

        flash('Activity has been saved', 'success');

        return \Redirect::route('activity.index');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();

        flash('Activity has been deleted', 'success');

        return \Redirect::route('activity.index');
    }
}
