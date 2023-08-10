<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use Validator;
use Auth;
use Carbon\Carbon;

class EventsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'poster' => 'required|mimes:png,jpg,jpeg'
        ]);
        $event = new Event;
        $event->fill($request->only(['title', 'description']));
        if($request->file('poster')){
            $path = 'images/events';
            $file= $request->file('poster');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path($path), $filename);
            $event->poster = $path . '/' . $filename;
        }
        $event->start_at = Carbon::tomorrow();
        $event->end_at = Carbon::tomorrow()->addHours(5);
        $event->creator_id = Auth::user()->id;
        $event->save();
        flash_message('Event created', 'info');
        return redirect()->to('/');
    }

    public function buyTicket(Request $request, $id)
    {
        $event = Event::find($id);
        $ticket = new Ticket;
        $ticket->user_id = Auth::user()->id;
        $event->tickets()->save($ticket);
        $event->user->update(['wallet' => $event->user->wallet + $event->price]);
        flash_message('Successfully bought a ticket', 'info');
        return redirect()->to('/');
    }

    public function destroy(Request $request, $id)
    {
        $event = Event::find($id);
        $event->tickets()->deleteAll();
        $event->delete();
        flash_message('Event deleted', 'info');
        return redirect()->to('/');

    }
}
