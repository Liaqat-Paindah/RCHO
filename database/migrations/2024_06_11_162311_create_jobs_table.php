<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->text('fullname');
            $table->date('dob');
            $table->text('gender');
            $table->text('nid');
            $table->text('email');
            $table->text('phone');
            $table->text('province');
            $table->text('city');
            $table->text('district');
            $table->text('degree');
            $table->text('major');
            $table->text('graduation');
            $table->text('grade');
            $table->text('experience');
            $table->text('cv');
            $table->text('letters');
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
        Schema::dropIfExists('jobs');
    }
}
