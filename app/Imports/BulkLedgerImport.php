<?php

namespace App\Imports;

use App\BulkLedger;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\RemembersChunkOffset;

class BulkLedgerImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
	use RemembersChunkOffset;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
		
		$chunkOffset = $this->getChunkOffset();
		
        return new BulkLedger([
            'Sr' => $row['sr'],
			'Date' => $row['date'],
			'Academic Year' => $row['academic_year'],
			'Session' => $row['session'],
			'Alloted Category' => $row['alloted_category'],
			'Voucher Type' => $row['voucher_type'],
			'Voucher No' => $row['voucher_no'],
			'Roll No' => $row['roll_no'],
			'Admno/UniqueId' => $row['admnouniqueid'],
			'Status' => $row['status'],
			'Fee Category' => $row['fee_category'],
			'Faculty' => $row['faculty'],
			'Program' => $row['program'],
			'Department' => $row['department'],
			'Batch' => $row['batch'],
			'Receipt No' => $row['receipt_no'],
			'Fee Head' => $row['fee_head'],
			'Due Amount' => $row['due_amount'],
			'Paid Amount' => $row['paid_amount'],
			'Concession Amount' => $row['concession_amount'],
			'Scholarship Amount' =>  $row['scholarship_amount'],
			'Reverse Concession Amount' => $row['reverse_concession_amount'],
			'Write Off Amount' => $row['write_off_amount'],
			'Adjusted Amount' => $row['adjusted_amount'],
			'Refund Amount' => $row['refund_amount'],
			'Fund TranCfer Amount' => $row['fund_trancfer_amount'],
			'Remarks' => $row['remarks']
        ]);
    }

	public function headingRow(): int
    {
        return 6;
    }

	public function batchSize(): int
	{
		return 1000;
	}

	public function chunkSize(): int
	{
		return 1000;
	}
}
