<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TicketController extends Controller
{
    //En Digital
    public function enDigital() {
        return view('tickets.tickets-endigital');
    }
    public function feedEndigital()
    {
        $results = DB::select('SELECT * FROM tickets_en_digital');
        return ['data' => $results];
    }
    public function ticketEndigital($internal_id)
    {
        $results = DB::select('SELECT * FROM tickets_en_digital WHERE Internal_ID = ' . $internal_id);
        return view('tickets.show-data-en-digital', compact('results'));
    }

    //GoDaddy
    public function ticketsGodaddy()
    {
        return view('tickets.tickets-godaddy');
    }
    public function feedGodaddyTicket()
    {
        $results = DB::select('SELECT * FROM tickets_godaddy_v2 WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results];
    }
    public function ticketGodaddy($internal_id)
    {
        $results = DB::select('SELECT * FROM tickets_godaddy_v2 WHERE Internal_ID = ' . $internal_id);
        return view('tickets.show-data', compact('results'));
    }
}
