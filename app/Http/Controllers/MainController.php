<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index(){
        $results = DB::select('SELECT * FROM TAREASCLAROQA LIMIT 10');
        //return $results;
        return view('tasks.search');
    }
}
