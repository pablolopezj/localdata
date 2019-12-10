<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tareasClaro;

class TasksController extends Controller
{
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
        return view('tasks.show-data', compact('results'));
    }
}
