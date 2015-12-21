<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ticket;
use Auth;

class TicketController extends Controller
{  
    public function create( Request $request )
    {
        $ticket = new Ticket();
        $ticket->customer_name      = $request->get('customer_name');
        $ticket->customer_address   = $request->get('customer_address');
        $ticket->customer_tel       = $request->get('customer_tel');
        $ticket->customer_email     = $request->get('customer_email');
        $ticket->type               = $request->get('type');
        $ticket->category_id        = $request->get('category_id');
        $ticket->post_serial        = $request->get('post_serial');
        $ticket->description        = $request->get('description');
        $ticket->user_created       = Auth::user()->id;

        if( !$ticket->save() )
        {
            return 'There was an error';
        }

        return 'Ticket created';


    }
}
