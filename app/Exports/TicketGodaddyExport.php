<?php

namespace App\Exports;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class TicketGodaddyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $results = DB::select('SELECT * FROM tickets_godaddy');
        return $collection = collect($results);
    }
}
