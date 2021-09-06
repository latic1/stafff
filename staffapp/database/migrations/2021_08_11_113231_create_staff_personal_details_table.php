<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffPersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('employee_number')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('title');
            $table->string('dob');
            $table->string('email');
            $table->string('mobile_number');
            $table->string('emergency_number');
            $table->string('emergency_contact_person');
            $table->string('tin_number');
            $table->integer('status');
            $table->integer('created_by')->nullable();
            $table->integer('last_updated_by')->nullable();
            $table->string('gender');
            $table->string('nationality')->nullable();
            $table->string('maridtal_Status');
            $table->string('picture')->nullable();
            $table->string('address_mailing');
            $table->string('physical_address');
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
        Schema::dropIfExists('staff_personal_details');
    }
}
