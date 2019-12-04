<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index(){
        return view('tasks.tasks-search');
    }

    public function tasks() {
        $results = DB::select('SELECT * FROM tareas_claro limit 50');
        return ['data' => $results ];
        
    }
}
