<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('university_id');
            $table->unsignedBigInteger('course_id');
            $table->timestamps();
            $table->string('pf_number');
            $table->string('name');
            $table->string('high_school_id');
            $table->string('gender_id');
            $table->string('mean_grade_id');
            $table->string('elp_class_id');
            $table->string('selection_criteria_id');
            $table->string('county_id');
            $table->string('branch_id');
            $table->string('phone_number');
            $table->string('email1');
            $table->string('email2');
            $table->string('family_contact');
            $table->string('family_contact_relationship');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholars');
    }
}
