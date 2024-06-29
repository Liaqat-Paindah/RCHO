<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->string('reference_name');
            $table->string('reference_type');
            $table->string('relationship');
            $table->string('organization');
            $table->string('email');
            $table->string('phone');
            $table->string('position');
            $table->string('association_start');
            $table->string('association_end');
            $table->string('perspective');
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
        Schema::dropIfExists('candidate_references');
    }
}
