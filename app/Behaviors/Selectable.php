<?php 

namespace App\Behaviors;

trait Selectable
{
    public static function selectList($empty=null)
    {
        $list = self::orderBy('name')->pluck('name', 'id');

        if (!is_null($empty)) {
            $list->prepend($empty, '');
        }
        
        return $list;
    }
}

