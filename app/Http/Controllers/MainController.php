<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index(){
        $results = DB::select('select * from TAREASCLAROQA LIMIT 10');
        return view('tasks.search');
    }
}
