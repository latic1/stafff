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
            $table->string('user_login')->nullable();
            $table->string('user_pass')->nullable();
            $table->integer('application_number')->nullable();
            $table->string('indexnumber');
            $table->string('regno2')->nullable();
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('title');
            $table->string('gender');
            $table->date('dob');
            $table->string('doa');
            $table->string('doc')->nullable();
            $table->string('progid')->nullable();
            $table->string('major')->nullable();
            $table->string('level');
            $table->string('entrylevel');
            $table->string('hall')->nullable();
            $table->string('ssnit');
            $table->string('nationality');
            $table->string('telephone');
            $table->string('mobile_phone');
            $table->string('email');
            $table->string('nhis');
            $table->string('student_type');
            $table->integer('completed')->nullable();
            $table->integer('graduate')->nullable();
            $table->string('classification')->nullable();
            $table->enum('status', ['active', 'suspended','dismissed','deceased','defered','withdrawn','inactive'])->nullable();
            $table->string('nat_id')->nullable();
            $table->string('campus');
            $table->string('class')->nullable();
            $table->string('contact_name');
            $table->string('contact_address');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('picture')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->enum('account_status',['active','inactive'])->nullable();
            $table->string('admitted_cohort')->nullable();;
            $table->string('current_cohort')->nullable();
            $table->string('editable_email')->nullable();
            $table->string('editable_mobile')->nullable();
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
