<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->text('address');
            $table->string('phone_number');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_number');
            $table->string('job_title');
            $table->foreignId('department_id')->constrained()->onDelete('cascade');
            $table->date('joining_date');
            $table->text('image');
            $table->enum('status', ['Active', 'Inactive']);
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
        Schema::dropIfExists('employees');
    }
}
