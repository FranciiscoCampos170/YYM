<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_meeting', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("meeting_id");
            $table->string("moderator_name");
            $table->string("password");
            $table->string("attende_password");
            $table->string("phone");
            $table->string("email");
            $table->integer("limit_participant");
            $table->integer("time_limit");
            $table->string("link");
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
        Schema::table('free_meeting', function (Blueprint $table) {
            //
        });
    }
}
