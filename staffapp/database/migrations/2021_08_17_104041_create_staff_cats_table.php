<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_cats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('status');
            $table->integer('created_by');
            $table->integer('last_updated_by');
            $table->integer('deleted_by');
            $table->timestampTz('delated_on');
            $table->integer('leave_allocation');
            $table->integer('medical_allocation');
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
        Schema::dropIfExists('staff_cats');
    }
}
