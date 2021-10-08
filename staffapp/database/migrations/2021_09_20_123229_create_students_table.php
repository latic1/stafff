<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('user_login');
            $table->string('user_pass');
            $table->integer('application_number');
            $table->string('indexnumber');
            $table->string('regno2');
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('title');
            $table->string('gender');
            $table->date('dob');
            $table->string('doa');
            $table->string('doc');
            $table->string('progid');
            $table->string('major');
            $table->string('level');
            $table->string('entrylevel');
            $table->string('hall');
            $table->string('ssnit');
            $table->string('nationality');
            $table->string('telephone');
            $table->string('mobile_phone');
            $table->string('email');
            $table->string('nhis');
            $table->string('student_type');
            $table->integer('completed');
            $table->integer('graduate');
            $table->string('classification');
            $table->enum('status', ['active', 'suspended','dismissed','deceased','defered','withdrawn','inactive']);
            $table->string('nat_id');
            $table->string('campus');
            $table->string('class');
            $table->string('contact_name');
            $table->string('contact_address');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('picture');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->enum('account_status',['active','inactive']);
            $table->string('admitted_cohort');
            $table->string('current_cohort');
            $table->string('editable_email');
            $table->string('editable_mobile');
            $table->integer('programduration');
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
        Schema::dropIfExists('students');
    }
}
