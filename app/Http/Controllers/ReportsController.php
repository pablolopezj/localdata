<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\TareasClaroExport;
use App\Exports\TareasEnDigitalExport;
use App\Exports\TareasVentasClickExport;
use App\Exports\TicketGodaddyExport;
use App\Exports\TicketEnDigitalExport;
use App\Exports\CustomersExport;
use App\Exports\SalesOrderExport;


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

    public function reportTicketEnDigital(Excel $excel) {
        $name = 'Ticket_en_digital.xlsx';
        return $excel->download(new TicketEnDigitalExport, $name);
    }
    public function reportTicketGodaddy(Excel $excel) {
        $name = 'Ticket_goaddady.xlsx';
        return $excel->download(new TicketGodaddyExport, $name);
    }

    public function reportCustomers(Excel $excel) {
        $name = 'Customers.xlsx';
        return $excel->download(new CustomersExport, $name);
    }

    public function reportSalesOrders(Excel $excel) {
        $name = 'SalesOrders.xlsx';
        return $excel->download(new SalesOrderExport, $name);
    }
}
