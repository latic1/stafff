<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffEmploymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_employment_details', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->integer('department');
            $table->integer('position');
            $table->integer('supervisor');
            $table->string('staff_email');
            $table->string('staff_phone');
            $table->integer('status');
            $table->integer('rank');
            $table->string('entry_qualification');
            $table->dateTime('date_started');
            $table->dateTime('ending_date');
            $table->integer('created_by');
            $table->integer('last_updated_by');
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
        Schema::dropIfExists('staff_employment_details');
    }
}
