<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\TareasClaroExport;
use App\Exports\TareasEnDigitalExport;
use App\Exports\TareasVentasClickExport;
use App\Models\TareasVentasClick;


class ReportsController extends Controller
{
    //Generete excel task Claro
    public function reportTask(Excel $excel) {
        $name = 'Tareas_claro.xlsx';
        return $excel->download(new TareasClaroExport, $name);
    }

    public function reportTaskEnDigital(Excel $excel) {
        $name = 'Tareas_en_digital.xlsx';
        return $excel->download(new TareasEnDigitalExport, $name);
    }

    public function reportTaskGodaddy(Excel $excel) {
        $name = 'Tareas_godaddy.xlsx';
        return $excel->download(new TareasGodaddyExport, $name);
    }

    public function reportTaskVentasClick(Excel $excel){
        $name = 'Tareas_en_digital.xlsx';
        return $excel->download(new TareasVentasClickExport, $name);
    }
}
