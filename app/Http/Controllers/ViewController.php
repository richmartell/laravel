<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Ticket;

class ViewController extends Controller
{

    public function getHomepage()
    {
        return view('index');
    }

    public function getSandbox()
    {
        $tickets = Ticket::all();

        return $tickets;
    }

    public function getDashboard()
    {
        return view('dashboard');
    }

    public function getTicketNew()
    {
        $categories = Category::all();

        return view('ticket.create')->with('categories', $categories);
    }

}
