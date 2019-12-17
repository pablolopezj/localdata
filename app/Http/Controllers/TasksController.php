<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tareasClaro;
use App\Models\tareasEnDigital;
use DB;

class TasksController extends Controller
{
    //CLARO TASKS
    /**
     * Display a list of the Claro Tasks
     * @return view
     */
    public function claro()
    {
        return view('tasks.tasks-claro');
    }

    public function feedClaro()
    {
        $results = tareasClaro::all();
        return ['data' => $results];
    }

    public function tareaClaro($internal_id)
    {
        $results = tareasClaro::where('Internal_ID', $internal_id)->get();
        return view('tasks.show-data-claro', compact('results'));
    }

    //EN DIGITAL
    public function enDigital()
    {
        return view('tasks.tasks-en-digital');
    }
    public function feedEnDigital()
    {
        $results = tareasEnDigital::all();
        return ['data' => $results];
    }
    public function tareaEnDigital($internal_id)
    {
        $results = tareasEnDigital::where('Internal_ID', $internal_id)->get();
        return view('tasks.show-data', compact('results'));
    }

    //TAREAS GODADDY
    public function tareasGodaddy()
    {
        return view('tasks.tareas-godaddy');
    }
    public function feedGodaddy()
    {
        $results = DB::select('SELECT * FROM tareas_goaddy WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results];
    }
    public function tareaGodaddy($internal_id)
    {
        $results = DB::select('SELECT * FROM tareas_goaddy WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }
}
