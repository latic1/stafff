<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->string('name_of_beneficiary');
            $table->float('percentage');
            $table->string('mobile');
            $table->string('address');
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
        Schema::dropIfExists('staff_beneficiaries');
    }
}
