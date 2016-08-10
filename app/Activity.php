<?php

namespace App;

use App\Behaviors\Selectable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use SoftDeletes, Selectable;

    protected $fillable = ['name', 'description'];

    protected $dates = ['created_at', 'updated_at'];
}