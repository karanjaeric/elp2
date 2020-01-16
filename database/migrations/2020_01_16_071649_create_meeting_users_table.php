<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('meeting_id');
            //$table->foreign('meeting_id')-> references('id')-> on('meetings');
            $table->integer('user_id');
            //$table->foreign('user_id')-> references('id')-> on('users');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('meeting_users');
    }
}
