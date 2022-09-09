<?php

namespace App\Imports;

use App\BulkLedger;
use Maatwebsite\Excel\Concerns\ToModel;

class BulkLedgerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BulkLedger([
            'Sr' => $row[0],
			'Date' => $row[1],
			'Academic Year' => $row[2],
			'Session' => $row[3],
			'Alloted Category' => $row[4],
			'Voucher Type' => $row[5],
			'Voucher No' => $row[6],
			'Roll No' => $row[7],
			'Admno/UniqueId' => $row[8],
			'Status' => $row[9],
			'Fee Category' => $row[10],
			'Faculty' => $row[11],
			'Program' => $row[12],
			'Department' => $row[13],
			'Batch' => $row[14],
			'Receipt No' => $row[15],
			'Fee Head' => $row[16],
			'Due Amount' => $row[17],
			'Paid Amount' => $row[18],
			'Concession Amount' => $row[19],
			'Scholarship Amount' =>  $row[20],
			'Reverse Concession Amount' => $row[21],
			'Write Off Amount' => $row[22],
			'Adjusted Amount' => $row[23],
			'Refund Amount' => $row[24],
			'Fund TranCfer Amount' => $row[25],
			'Remarks' => $row[26]
        ]);
    }
}
