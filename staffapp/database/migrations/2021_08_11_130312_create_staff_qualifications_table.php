<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_qualifications', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->string('name_of_institution');
            $table->integer('start_year');
            $table->string('qualification_type');
            $table->string('awards');
            $table->integer('end_year');
            $table->text('file_path');
            $table->string('subject_area');
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
        Schema::dropIfExists('staff_qualifications');
    }
}
