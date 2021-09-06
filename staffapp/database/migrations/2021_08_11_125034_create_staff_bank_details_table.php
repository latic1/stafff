<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBankDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_bank_details', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->string('bank_name');
            $table->string('short_code');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('account_branch');
            $table->integer('status');
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
        Schema::dropIfExists('staff_bank_details');
    }
}
