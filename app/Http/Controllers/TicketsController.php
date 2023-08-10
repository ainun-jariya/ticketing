<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\User;
use Validator;
use Auth;
use Carbon\Carbon;

class TicketsController extends Controller
{
    public function use(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        if($ticket->joined_at == null) {
            $ticket->joined_at = Carbon::now();
        }
        $ticket->save();
        flash_message('Ticket used', 'info');
        return redirect()->to('/');
    }

    public function refund(Request $request, $id)
    {

        $ticket = Ticket::find($id);
        $user = User::find(Auth::user()->id);
        $event = $ticket->ticketable;
        $user->wallet = (double)$event->price * 0.75;
        $user->save();
        $ticket->delete();  
        $event->quota = $event->quota + 1;
        $event->save();
        flash_message('Ticket refunded to wallet', 'info');
        return redirect()->to('/');
    }
}
