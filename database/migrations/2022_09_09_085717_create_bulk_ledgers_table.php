<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulkLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulk_ledgers', function (Blueprint $table) {
            $table->string('Sr')->nullable();
			$table->string('Date')->nullable();
			$table->string('Academic Year')->nullable();
			$table->string('Session')->nullable();
			$table->string('Alloted Category')->nullable();
			$table->string('Voucher Type')->nullable();
			$table->string('Voucher No')->nullable();
			$table->string('Roll No')->nullable();
			$table->string('Admno/UniqueId')->nullable();
			$table->string('Status')->nullable();
			$table->string('Fee Category')->nullable();
			$table->string('Faculty')->nullable();
			$table->string('Program')->nullable();
			$table->string('Department')->nullable();
			$table->string('Batch')->nullable();
			$table->string('Receipt No')->nullable();
			$table->string('Fee Head')->nullable();
			$table->string('Due Amount')->nullable();
			$table->string('Paid Amount')->nullable();
			$table->string('Concession Amount')->nullable();
			$table->string('Scholarship Amount')->nullable();
			$table->string('Reverse Concession Amount')->nullable();
			$table->string('Write Off Amount')->nullable();
			$table->string('Adjusted Amount')->nullable();
			$table->string('Refund Amount')->nullable();
			$table->string('Fund TranCfer Amount')->nullable();
			$table->string('Remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulk_ledgers');
    }
}
