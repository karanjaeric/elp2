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
            $table->unsignedBigInteger('university_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->timestamps();
            $table->string('pf_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('id_number')->nullable();
            $table->string('high_school_id')->nullable();
            $table->string('gender_id')->nullable();
            $table->string('mean_grade_id')->nullable();
            $table->string('elp_class_id')->nullable();
            $table->string('selection_criteria_id')->nullable();
            $table->string('county_id')->nullable();
            $table->string('branch_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('phone_number2')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('family_contact')->nullable();
            $table->string('contact_relationship_id')->nullable();

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
