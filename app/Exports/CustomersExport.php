<?php

namespace App\Exports;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $results = DB::select('SELECT * FROM cliente');
        return $collection = collect($results);
    }
}
