<?php

function flash_message($message = '', $type = '')
{
    session()->flash('message', $message); 
    session()->flash('alert-class', "alert-{$type}");
}

function to_time($datetime)
{
    return \Carbon\Carbon::parse($datetime)->format('H:i');
}

function to_date($datetime)
{
    return \Carbon\Carbon::parse($datetime)->format('d F Y');
}