<?php

function flash_message($message = '', $type = '')
{
    session()->flash('message', $message); 
    session()->flash('alert-class', "alert-{$type}");
}