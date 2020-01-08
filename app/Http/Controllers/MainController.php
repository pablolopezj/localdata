<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salesOrder;
use DB;

class MainController extends Controller
{
   
    //Sales Order
    public function customersSalesOrder() 
    {
        return view('salesorder.sales-order');
    }
    public function feedCustomersSalesOrder(Request $request)
    {
        $search  = $this->getSearch($request);
        if (!is_null($search)) {
            $results = SalesOrder::where('Virket_ID', $search)
                ->orWhere('Nombre', $search)
                ->orWhere('Fecha', $search)
                ->orWhere('Periodo', $search)
                ->orWhere('Representante_de_ventas', $search)
                ->orWhere('Cuenta', $search)
                ->orWhere('Importe', $search)
                ->skip($request['start'])
                ->take(10)
                ->get();
            $format_array = [
                'recordsTotal' =>  $results->count(),
                'recordsFiltered' => SalesOrder::count(),
                'data' => $results
            ];
        } else {
            $results = SalesOrder::skip($request['start'])->take(10)->get();
            $format_array = [
                'recordsTotal' =>  $results->count(),
                'recordsFiltered' => SalesOrder::count(),
                'data' => $results
            ];
        }
        return $format_array;
    }
    private function getSearch($request)
    {
        foreach ($request->request as $key => $row) {
            if ($key == 'search') {
                return $row['value'];
            }
        }
    } 
    public function showInfoSalesOrder($internal_id)
    {
        $results = DB::select('SELECT * FROM sales_orders WHERE Internal_ID = ' . $internal_id);
        return view('salesorder.show-data-sales-order', compact('results'));
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
        return view('customers.show-data-customer', compact('results'));
    }
}
