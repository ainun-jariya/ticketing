<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Auth;
use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $upcomingEvents = Event::available()->get();
        $onGoingEvents = Event::onGoing()->get();
        $passedEvents = Event::passed()->get();
        return view('home', compact('upcomingEvents', 'onGoingEvents', 'passedEvents'));
    }
}
