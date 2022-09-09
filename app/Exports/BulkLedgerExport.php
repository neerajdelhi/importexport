<?php

namespace App\Exports;

use App\BulkLedger;
use Maatwebsite\Excel\Concerns\FromCollection;

class BulkLedgerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BulkLedger::all();
    }
}
