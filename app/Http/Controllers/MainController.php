<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salesOrder;
use DB;

class MainController extends Controller
{
    //Tareas Claro
    public function index(){
        return view('tasks.tasks-search');
    }

    public function feedClaro() {
        $results = DB::select('SELECT * FROM tareas_claro ');
        return ['data' => $results ];   
    }

    public function tareaClaro($internal_id) {
        $results = DB::select('SELECT * FROM tareas_claro WHERE Internal_ID = '. $internal_id);
        return view('tasks.show-data', compact('results'));
    }

    // Taareas En Digital 
    public function tareased() {
        return view('tasks.tareas-en-digital');
    }

    public function feedEndigital() {
        $results = DB::select('SELECT * FROM tareas_en_digital WHERE Internal_ID != "Internal ID"');
        return ['data' => $results]; 
    }

    public function tareaEnDigital($internal_id) {
        $results = DB::select('SELECT * FROM tareas_en_digital WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }
    //Tareas Godaddy
    public function tareasGodaddy() {
        return view('tasks.tareas-godaddy');
    }
    public function feedGodaddy() {
        $results = DB::select('SELECT * FROM tareas_goaddy WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results]; 
    }
    public function tareaGodaddy($internal_id)
    {
        $results = DB::select('SELECT * FROM tareas_goaddy WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }

    //Tickets Godaddy
    public function ticketsGodaddy() {
        return view('tickets.tickets-godaddy');
    }
    public function feedGodaddyTicket() {
        $results = DB::select('SELECT * FROM tickets_godaddy WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results]; 
    }
    public function ticketGodaddy($internal_id) {
        $results = DB::select('SELECT * FROM tickets_godaddy WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }

    //Tickets EnDigital
    public function ticketsEndigital(){
        return view('tickets.tickets-endigital');
    }

    public function feedEndigitalTicket()
    {
        $results = DB::select('SELECT * FROM tickets_en_digital WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results];
    }
    public function ticketEndigital($internal_id)
    {
        $results = DB::select('SELECT * FROM tickets_en_digital WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }

    //Customers CLARO
    public function customersClaro() {
        return view('customers.customers-claro');
    }
    public function feedCustomersClaro()
    {
        $results = DB::select('SELECT * FROM clientes_claro WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results];
    }
    public function customerDataCalro($internal_id)
    {
        $results = DB::select('SELECT * FROM clientes_claro WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }

    //Customers En Digital
    public function customersEnDigital()
    {
        return view('customers.customer-en-digital');
    }
    public function feedCustomersEnDigital()
    {
        $results = DB::select('SELECT * FROM clientes_en_digital WHERE Internal_ID != "Internal ID" LIMIT 5500');
        return ['data' => $results];
    }
    public function customerDataEnDigital($internal_id)
    {
        $results = DB::select('SELECT * FROM clientes_en_digital WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }

    //Customers Godaddy
    public function customersGodaddy()
    {
        return view('customers.customers-godaddy');
    }
    public function feedCustomersGodaddy()
    {
        $results = DB::select('SELECT * FROM CLIENTES LIMIT 55');
        return ['data' => $results];
    }
    public function customerGodaddy($internal_id)
    {
        $results = DB::select('SELECT * FROM clientes_godaddy WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }

    //Sales Order
    public function customersSalesOrder() 
    {
        return view('salesorder.sales-order');
    }
    public function feedCustomersSalesOrder(Request $request)
    {
        $sales_order = new SalesOrder();
        $results = $sales_order::take(5500)->get();
        return ['data' => $results];
    }
    public function customerSalesOrder($internal_id)
    {
        $results = DB::select('SELECT * FROM sales_orders WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }

    //CUSTOMERS
    public function customers() {
        return view('customers.customer-all');
    }
    public function feedCustomers() {
        $results = DB::select('SELECT * FROM cliente');
        return ['data' => $results];
    }
    public function datacustomer($internal_id)
    {
        $results = DB::select('SELECT * FROM cliente WHERE Internal_ID = ' . $internal_id);
        return view('tasks.show-data', compact('results'));
    }
}
