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
        $results = SalesOrder::take(5500)->get();
        return ['data' => $results];
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
