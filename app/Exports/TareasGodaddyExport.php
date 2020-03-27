<?php

namespace App\Exports;

use App\Models\TareasGodaddy;
use Maatwebsite\Excel\Concerns\FromCollection;

class TareasGodaddyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $results = TareasGodaddy::all();
        return $collection = collect($results);
    }
}
