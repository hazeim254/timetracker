<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['project_id', 'activity_id', 'description', 'done_at', 'hours', 'minutes'];

    protected $dates = ['created_at', 'updated_at', 'done_at'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function getTimeAttribute()
    {
        return sprintf("%02d:%02d", $this->hours, $this->minutes);
    }
}