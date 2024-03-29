<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tareasClaro;
use App\Models\tareasEnDigital;
use App\Models\TareasGodaddy;
use App\Models\TareasVentasClick;
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
    public function feedGodaddy(Request $request)
    {
        $search  = $this->getSearch($request);
        
        if ( !is_null($search) ) {
            $results = TareasGodaddy::where('Email', $search )
                ->orWhere('Virket_ID', $search)
                ->orWhere('Project_Task_Status', $search)
                ->skip($request['start'])
                ->take(10)
                ->get();

            $format_array = [
                'recordsTotal' =>  $results->count(),
                'recordsFiltered' => TareasGodaddy::count(),
                'data' => $results
            ];
        } else {
            $results = TareasGodaddy::skip($request['start'])->take(10)->get();
            $format_array = [
                'recordsTotal' =>  $results->count(),
                'recordsFiltered' => TareasGodaddy::count(),
                'data' => $results
            ];
        }

        return $format_array;
    }

    private function getSearch($request) {
        foreach ($request->request as $key => $row) {
            if ($key == 'search') {
                return $row['value'];
            }
        } 
    } 
    public function tareaGodaddy($internal_id)
    {
        $results = TareasGodaddy::where('Internal_ID', $internal_id)->get();
        return view('tasks.show-data-godaddy', compact('results'));
    }

    //TAREAS VENTAS CLICK
    public function tareasVentasClick()
    {
        return view('tasks.tasks-ventasclick');
    }
    public function feedVentasClick(Request $request)
    {
        $results = tareasVentasClick::all();
        return ['data' => $results];
    }
    public function tareaVentasClick($internal_id)
    {
        $results = TareasVentasClick::where('Internal_ID', $internal_id)->get();
        return view('tasks.show-data-ventasclick', compact('results'));
    }
}
