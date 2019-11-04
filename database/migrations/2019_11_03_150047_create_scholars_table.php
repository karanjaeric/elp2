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
            $table->timestamps();
            $table->string('pf_number');
            $table->string('name');
            $table->string('high_school');
            $table->string('gender');
            $table->string('mean_grade');
            $table->string('elp_class');
            $table->string('selection_criteria');
            $table->string('county_of_residence');
            $table->string('branch_posting');
            $table->string('phone_number');
            $table->string('email1');
            $table->string('email2');
            $table->string('family_contact');
            $table->string('family_contact_relationship');
            $table->string('university');
            $table->string('course');

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
