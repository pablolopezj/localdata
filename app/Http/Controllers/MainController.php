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
}
