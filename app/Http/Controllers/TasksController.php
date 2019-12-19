<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tareasClaro;
use App\Models\tareasEnDigital;
use App\Models\TareasGodaddy;
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
        return view('tasks.show-data-en-digital', compact('results'));
    }

    //TAREAS GODADDY
    public function tareasGodaddy()
    {
        return view('tasks.tasks-godaddy');
    }
    public function feedGodaddy()
    {
        $results = TareasGodaddy::take(10)->get();
        return ['data' => $results];
    }
    public function tareaGodaddy($internal_id)
    {
        $results = TareasGodaddy::where('Internal_ID', $internal_id)->get();
        return view('tasks.show-data', compact('results'));
    }
}
