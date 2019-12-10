<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClaroController extends Controller
{
    public function claro() {
        return view('tasks.tasks-claro');
    }

    public function feedClaro()
    {
        $results = DB::select('SELECT * FROM tareas_claro ');
        return ['data' => $results];
    }

    public function tareaClaro($internal_id)
    {
        $results = DB::select('SELECT * FROM tareas_claro WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }
}
