<?php

function flash($message, $type = 'danger')
{
    Session::flash('flash-message', $message);
    Session::flash('flash-type', $type);
}

function __($id, $parameters = [], $domain = 'messages', $locale = null)
{
    return trans($id, $parameters, $domain, $locale);
}

function format_time($time)
{
    $hours = intval($time / 60);
    $minutes = $time % 60;

    return sprintf("%02d:%02d", $hours, $minutes);
}