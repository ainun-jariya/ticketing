<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();
        return response()->json([
            'success' => true,
            'message' => 'Event list',
            'data'    => $events  
        ], 200);
    }
}
