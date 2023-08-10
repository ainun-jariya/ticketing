<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Auth;
use App\Models\Event;

class DashboardController extends Controller
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $upcomingEvents = Event::available()->boughtOne()->get();
        $promoterEvents = Auth::user()->events;
        $myEvents = Auth::user()->subscribedEvents;
        return view('dashboard', compact('upcomingEvents', 'myEvents', 'promoterEvents'));
    }
}
