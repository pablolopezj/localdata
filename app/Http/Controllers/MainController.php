<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    //Tareas Claro
    public function index(){
        return view('tasks.tasks-search');
    }

    public function feedClaro() {
        $results = DB::select('SELECT * FROM tareas_claro ');
        return ['data' => $results ];   
    }

    public function tareaClaro($internal_id) {
        $results = DB::select('SELECT * FROM tareas_claro WHERE Internal_ID = '. $internal_id);
        return $results;
    }

    // Taareas En Digital 
    public function tareased() {
        return view('tasks.tareas-en-digital');
    }

    public function feedEndigital() {
        $results = DB::select('SELECT * FROM tareas_en_digital WHERE Internal_ID != "Internal ID"');
        return ['data' => $results]; 
    }

    public function tareaEnDigital($internal_id) {
        $results = DB::select('SELECT * FROM tareas_en_digital WHERE Internal_ID = ' . $internal_id);
        return $results;
    }
    //Tareas Godaddy
    public function tareasGodaddy() {
        return view('tasks.tareas-godaddy');
    }
    public function feedGodaddy() {
        $results = DB::select('SELECT * FROM tareas_goaddy WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results]; 
    }
    public function tareaGodaddy($internal_id)
    {
        $results = DB::select('SELECT * FROM tareas_goaddy WHERE Internal_ID = ' . $internal_id);
        return $results;
    }

    //Tickets Godaddy
    public function ticketsGodaddy() {
        return view('tickets.tickets-godaddy');
    }
    public function feedGodaddyTicket() {
        $results = DB::select('SELECT * FROM tickets_godaddy WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results]; 
    }
    public function ticketGodaddy($internal_id) {
        $results = DB::select('SELECT * FROM tickets_godaddy WHERE Internal_ID = ' . $internal_id);
        return $results;
    }

    //Tickets EnDigital
    public function ticketsEndigital(){
        return view('tickets.tickets-endigital');
    }

    public function feedEndigitalTicket()
    {
        $results = DB::select('SELECT * FROM tickets_en_digital WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results];
    }
    public function ticketEndigital($internal_id)
    {
        $results = DB::select('SELECT * FROM tickets_en_digital WHERE Internal_ID = ' . $internal_id);
        return $results;
    }
}
