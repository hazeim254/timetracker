<?php

namespace App;

use App\Behaviors\Selectable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes, Selectable;
    
    protected $fillable = ['name', 'description'];

    protected $dates = ['created_at', 'updated_at'];

    protected $activities = null;

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getActivityAttribute()
    {
        if ($this->activities) {
            return $this->activities;
        }

        $activities = collect();
        foreach ($this->tasks as $task) {
            $activity = $task->activity->name;
            $time = $activities->get($activity, 0);
            $time += $task->hours * 60 + $task->minutes;
            $activities->put($activity, $time);
        }

        return $this->activities = $activities;
    }
}