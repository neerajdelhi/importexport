<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BulkLedger extends Model
{
	protected $table='bulk_ledgers';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Sr','Date','Academic Year','Session','Alloted Category',
		'Voucher Type','Voucher No','Roll No','Admno/UniqueId','Status',
		'Fee Category','Faculty','Program','Department','Batch','Receipt No','Fee Head',
		'Due Amount','Paid Amount','Concession Amount','Scholarship Amount','Reverse Concession Amount',
		'Write Off Amount','Adjusted Amount','Refund Amount','Fund TranCfer Amount','Remarks',
    ];
}
